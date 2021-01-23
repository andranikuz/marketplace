## Marketplace

1) clone project
2) make .env by .env.example. 
3) set your own SMTP settings for email verify in .inv
3) run commands:

```
composer install
npm install
npm run dev
docker-compose up -d
docker exec Marketplace php artisan migrate
docker exec Marketplace php artisan db:seed
```

TODO 
1) validation AdController Request
2) creating ads
3) query builder class for elasticsearch
4) role model
5) notifications
6)...