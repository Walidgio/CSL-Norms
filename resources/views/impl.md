```
I have researched the current "Remark" (annotation) system and confirmed that it is currently entirely frontend-based, storing data in localStorage under keys like ann_data_book_{docId}.

To migrate this to a database and support multi-user collaboration, editing, and deletion, we need to implement a full-stack CRUD system.

🔍 Current State Diagnosis
Data Storage: Purely local via localStorage. No data is sent to the server.
User Identity: Hardcoded to "Moi" in the frontend logic.
Capabilities: No editing or deletion of individual remarks once saved. No server-side persistence or sharing.
Structure: Annotations (highlights) contain an array of Remarks (comments).
I have prepared a detailed implementation plan to migrate this system to a Laravel-backed database architecture.
```

# Collaborative Annotation & Remark System Migration

Migrate the client-side annotation system to a Laravel database backend to allow multi-user sharing, persistent storage, and CRUD operations.

## User Review Required

> [!IMPORTANT]
> - **Authentication**: All users must be logged in to create or view annotations/remarks. Guest access will be read-only if permitted, or disabled entirely.
> - **Data Privacy**: "Private" remarks will only be visible to the author.
> - **Deletion Logic**: If an annotation (highlight) is deleted, all associated remarks will also be deleted (cascade).

## Proposed Changes

### 1. Database Layer
#### [NEW] [2024_05_03_create_annotations_table.php](file:///d:/Codes/source/repos/RPA24IntegratorWeb/database/migrations/2024_05_03_create_annotations_table.php)
Stores the physical highlights/selections in the documents.
- `doc_id` (e.g., 'rpa-2024')
- `section_id` (HTML ID)
- `start_xpath`, `end_xpath`, `start_offset`, `end_offset`
- `quote` (The highlighted text)
- `color`, `hex` (Styling)
- `user_id` (Creator)

#### [NEW] [2024_05_03_create_remarks_table.php](file:///d:/Codes/source/repos/RPA24IntegratorWeb/database/migrations/2024_05_03_create_remarks_table.php)
Stores comments attached to annotations.
- `annotation_id` (FK)
- `user_id` (FK)
- `text`
- `is_private` (Boolean)

#### [NEW] [2024_05_03_create_remark_votes_table.php](file:///d:/Codes/source/repos/RPA24IntegratorWeb/database/migrations/2024_05_03_create_remark_votes_table.php)
Tracks helpfulness votes to prevent multiple voting.

### 2. Backend Logic (Laravel)
- Create Models: `Annotation.php`, `Remark.php`, `RemarkVote.php`.
- Create `AnnotationController.php` with the following API endpoints:
    - `GET /annotations/{docId}`: Fetch all public (and own private) annotations for a book.
    - `POST /annotations`: Save new highlight.
    - `POST /remarks`: Add comment.
    - `PATCH /remarks/{id}`: Edit comment (Author only).
    - `DELETE /remarks/{id}`: Delete comment (Author or Admin).
    - `POST /remarks/{id}/vote`: Toggle vote.

### 3. Frontend Logic (JavaScript)
#### [MODIFY] [remark-script.blade.php](file:///d:/Codes/source/repos/RPA24IntegratorWeb/resources/views/norms/partials/remark-panel/remark-script.blade.php)
- Replace `localStorage` with `fetch()` calls to the new API.
- Inject current user metadata (`window.authUserId`, `window.authUserName`).
- Add "Edit" and "Delete" buttons to the UI for user-owned comments.
- **Migration Logic**: On first load, if `localStorage` contains data, offer to "Sync" it to the DB once, then clear local storage.

## Verification Plan

### Automated Tests
- Unit tests for `AnnotationController` (Auth checks, Privacy checks).
- Dusk test to verify highlighting -> saving -> refreshing -> editing.

### Manual Verification
- Log in as User A: Create an annotation and a comment.
- Log in as User B: Verify the annotation is visible, but private comments are hidden.
- Test "Edit" and "Delete" functionality for your own comments.
