# Database ER Diagram

users 1..* roles
pages 1..* page_translations
directors 1..* director_translations
departments 1..* department_translations
products 1..* product_translations
products *..1 product_categories
products 1..* product_documents
gallery_albums 1..* gallery_items
job_vacancies 1..* job_applications
menus 1..* menu_items
All content tables link to seo_metadata (polymorphic) and media.
