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

- node-device-detector [https://www.npmjs.com/package/node-device-detector](https://www.npmjs.com/package/node-device-detector)
- axios [https://www.npmjs.com/package/axios#installing](https://www.npmjs.com/package/axios#installing)


Stubb has no client, only uses entries in `data/urls.json`

```json
{
    "data" : [
        "stub.stubb.ml" : {
            "password" : ""
            "redirect" : "tets.com"
        },
        {
            "password" : ""
            "redirect" : "tets.com"
        }
    ]
}
```

