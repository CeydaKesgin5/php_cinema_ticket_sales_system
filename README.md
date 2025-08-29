# kommutlar ve promptlar

## laravel

composer create-project laravel/laravel community_laravel

gerekli tablo bilgilerini notlar.md ye yaz.
.env dosyasından veritabanına ait güncellemeleri gerçekleştir
**propmt1->notlar.md bu sütunlar için bana migration ve model dosyalarını hazırla.**

manuel migration oluşturma
php artisan migrate

**prompt2: bu tablolara ait controller oluştur, model binding kullan.**
routes/api.php: api.php dosyasına gerekli düzenlemeleri yap.
api-test.http dosyasına test için apileri ekle.

seed data oluşturmak için de promptu yaz.
manuel oluşturmak için gerekli olabilecek komutlar

php artisan db:seed
php artisan migrate:fresh --seed

php artisan serve ile çalıştırmayı unutma


## quasar

npm install -g @quasar/cli

npm init quasar

npx create-quasar

√ What would you like to build? » **App with Quasar CLI, let's go!**
√ Project folder: ... **task_manager_quasar**
√ Pick script type: » **Javascript** 
√ Pick Quasar App CLI variant: » **Quasar App CLI with Vite**
√ Package name: ... **task-manager-quasar**
√ Project product name: (must start with letter if building mobile apps) ... **Quasar App**
√ Project description: ... **A Quasar Project** 
√ Pick a Vue component style: » **Composition API with <script setup>**
√ Pick your CSS preprocessor: » **Sass with SCSS syntax** 
√ Check the features needed for your project: » **Linting (vite-plugin-checker + ESLint), State Management (Pinia), axios**
√ Add Prettier for code formatting? ... **yes**

Quasar • SUCCESS • The project has been scaffolded

√ Install project dependencies? (recommended) » **Yes, use npm**

.env dosyası oluştur ve apiyi tanımla.
VITE_API_BASE=http://127.0.0.1:8000

çalıştır
quasar dev

@community_laravel bu laravel projesini incele ve öğren



