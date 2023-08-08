
command require:

for docker: 

	docker-compose -f docker-compose.yml up

for .env:
	
	php artisan tinker
	>>> DB::connection()->getPdo();

for moodels:

	php artisan make:model Products -f -m -s 
	php artisan make:model Clients -f -m -s
	php artisan make:model Requests -f -m -s

run migration for create tbl in dba:
	php artisan migrate
