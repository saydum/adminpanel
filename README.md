# Stek
- Laravel 10+
- Admin LTE
- Bootstrap
- nwidart/laravel-modules

# Built-in functionality
- Auth
    - Role
        - Admin
        - Manager
        - User
- Users
- Category
- Tag
- Set module
- Settings
- Notification
- Statistics
- Search
---
# 1. Install

## 1.1 Create projects

## 1.2 Set admin user
```bash
php artisan make:admin --createadmin -e admin@admin.com -p password123
```

# 2. Set module

# 3. Get `summernote` in `blade` template
```php
<form>
    // <label>Post edition<label>
    // <textarea name="post" id="summernote" ></textarea>
    {{ summernote('post', 'Post edition') }}
</form>
```

