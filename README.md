

# **Consulta**

```php
array() {
  ["Host"]=> string(9) "localhost"
      
  ["Connection"]=> string(10) "keep-alive"
      
  ["Content-Length"]=> string(2) "37"
      
  ["sec-ch-ua"]=> string(65) ""Google Chrome";v="113", "Chromium";v="113", "Not-A.Brand";v="24""
      
  ["sec-ch-ua-platform"]=> string(7) ""Linux""
      
  ["sec-ch-ua-mobile"]=> string(2) "?0"
      
  ["User-Agent"]=> string(101) "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36"
      
  ["content-type"]=> string(16) "application/json"
      
  ["Accept"]=> string(3) "*/*"
      
  ["Origin"]=> string(16) "http://localhost"
      
  ["Sec-Fetch-Site"]=> string(11) "same-origin"
      
  ["Sec-Fetch-Mode"]=> string(4) "cors"
      
  ["Sec-Fetch-Dest"]=> string(5) "empty"
      
  ["Referer"]=> string(60) "http://localhost/SpUkM01-094/Php/?nombre=1&apellido=1&edad=1"
      
  ["Accept-Encoding"]=> string(17) "gzip, deflate, br"
      
  ["Accept-Language"]=> string(23) "en-US,en;q=0.9,es;q=0.8"
}
```



# **Descripción**

 * Cada propiedad tiene su respectiva descripción y un ejemplo.

```php
$headers = [
    "Host" => "localhost",
       Descripción: Representa el nombre del host al que se realiza la solicitud.
       Ejemplo: El valor "localhost" indica que la solicitud se está realizando al servidor local.

    "Connection" => "keep-alive",
       Descripción: Indica el tipo de conexión establecida entre el cliente y el servidor.
       Ejemplo: El valor "keep-alive" indica que la conexión se mantiene abierta para permitir la comunicación continua.

    "Content-Length" => "37",
       Descripción: Indica la longitud del contenido del cuerpo de la solicitud.
       Ejemplo: El valor "37" indica que el cuerpo de la solicitud tiene una longitud de 37 bytes.

    "sec-ch-ua" => "\"Google Chrome\";v=\"113\", \"Chromium\";v=\"113\", \"Not-A.Brand\";v=\"24\"",
       Descripción: Indica las características del agente de usuario del cliente.
       Ejemplo: El valor indica que el agente de usuario del cliente es "Google Chrome" con la versión "113", "Chromium" con la versión "113", y "Not-A.Brand" con la versión "24".

    "sec-ch-ua-platform" => "\"Linux\"",
       Descripción: Indica la plataforma en la que se ejecuta el cliente.
       Ejemplo: El valor "Linux" indica que el cliente está ejecutándose en un sistema operativo Linux.

    "sec-ch-ua-mobile" => "?0",
       Descripción: Indica si el cliente es un dispositivo móvil.
       Ejemplo: El valor "?0" indica que no se considera un dispositivo móvil.

    "User-Agent" => "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36",
       Descripción: Representa el agente de usuario del cliente que realiza la solicitud.
       Ejemplo: El valor indica que el agente de usuario es Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36.

    "content-type" => "application/json",
       Descripción: Indica el tipo de contenido del cuerpo de la solicitud.
       Ejemplo: El valor "application/json" indica que el contenido del cuerpo de la solicitud está en formato JSON.

    "Accept" => "/",
       Descripción: Indica los tipos de contenido que el cliente acepta en la respuesta.
       Ejemplo: El valor "/" indica que el cliente acepta cualquier tipo de contenido.

    "Origin" => "http://localhost",
       Descripción: Indica el origen de la solicitud.
       Ejemplo: El valor "http://localhost" indica que la solicitud se originó en el dominio "localhost".

    ["Sec-Fetch-Site"] => string(11) "same-origin"
       Descripción: Indica el sitio desde el cual se realiza la solicitud.
       Ejemplo: El valor "same-origin" indica que la solicitud se realiza desde
]
```
