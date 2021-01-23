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
```

TODO 
1) seeds
2) validation AdController Request
3) creating ads
4) query builder class for elasticsearch
5) role model
... 