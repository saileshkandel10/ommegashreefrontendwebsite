# Database Architecture

Core tables: users, roles, permissions, pages, page_translations, homepage_sections, menus, menu_items, directors, director_translations, departments, department_translations, product_categories, products, product_translations, product_documents, milestones, news, notices, downloads, gallery_albums, gallery_items, job_vacancies, job_applications, enquiries, media, seo_metadata, website_settings, activity_logs.

Use utf8mb4. Index slugs, foreign keys, status, published_at. Spatie translatable or separate translation tables.
File storage: public disk for images, private for CVs.
