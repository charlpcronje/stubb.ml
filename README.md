# stubb.ml

```sh
  ______            _     _            _  
 / _____) _        | |   | |          | | 
( (____ _| |_ _   _| |__ | |__   ____ | | 
 \____ (_   _) | | |  _ \|  _ \ |    \| | 
 _____) )| |_| |_| | |_) ) |_) )| | | | | 
(______/  \__)____/|____/|____(_)_|_|_|\_)
                                                                 
01010011 01110100 01110101 01100010 01100010 
```

# Stubb.ml

Stubb is a url shortener that focuses to collect as much data about the device accessing the url as possbile

## Libs used

- DeviceDetector [https://github.com/matomo-org/device-detector](https://github.com/matomo-org/device-detector)

Stubb has no client, only uses entries in `data/urls.json`

```json
{
    "date": "2022-05-19 15:54:29",
    "env": [],
    "req": {
        "post": [],
        "get": [],
        "put": {},
        "delete": {},
        "request": []
    },
    "headers": {
        "Cdn-Loop": "cloudflare",
        "Cf-Connecting-Ip": "2409:8c00:2411:101::1",
        "Accept": "*\/*",
        "User-Agent": "curl\/7.29.0",
        "Cf-Visitor": "{\"scheme\":\"https\"}",
        "Cf-Ray": "70de02e6ff027b55-LAX",
        "Cf-Ipcountry": "CN",
        "Accept-Encoding": "gzip",
        "X-Real-Ip": "172.70.210.90",
        "X-Forwarded-For": "172.70.210.90",
        "X-Forwarded-Proto": "http",
        "X-Forwarded-Scheme": "http",
        "Host": "stubb.ml",
        "Connection": "Keep-Alive"
    },
    "device": {
        "clientInfo": {
            "type": "library",
            "name": "curl",
            "version": "7.29.0"
        },
        "osInfo": [],
        "device": "",
        "brand": "",
        "model": ""
    },
    "url": {
        "url": {
            "scheme": "http",
            "host": "stubb.ml",
            "path": "\/"
        },
        "scheme": "http",
        "user": null,
        "pass": null,
        "host": "stubb.ml",
        "port": null,
        "path": "\/",
        "query": null,
        "fragment": null
    },
    "title": 1
}
```

## Install Instructions

```sh

```

