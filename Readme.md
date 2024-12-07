## Installation and setup 

Clone Repository 
```
git clone https://github.com/Drooggie/template-docker-laravel.git
``` 

Move into Repository 
```
cd template-docker-laravel
``` 


Run this command for building and starting containers
```
docker compose up -d --build && docker compose logs -f app
```  
<br />

Then you can see your app in <a href="http://localhost:8888/"> localhost:8888</a>

To test functionality you just can make empty request to that uri <a href="http://localhost:8888/api/v1/weather/Astana">localhost:8888/api/v1/weather/Astana</a>.

It will return wrapped data. In the uri you can change location and get different result. For example:
```
localhost:8888/api/v1/weather/London
```

After request results will be cached and will be deleted in the beginning of next day. 