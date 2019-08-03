# Victoria

## Problema
Las emprendedoras de Victoria 147 no cuentan con un directorio donde puedan encontrar de manera fácil y rápida proveedores
confiables y alianzas entre ellas que les ayude a impulsar su negocio.

Las administradoras de Victoria 147 no tienen el control de las alianzas ni registro de los proveedores que las mismas emprendedoras
recomiendan. 

## Solución
Crear un directorio donde las emprendedoras podrán acceder y recomendar rápidamente a la información de proveedores válidados de alta calidad y de otras emprendedoras.

Asimismo, ofrecerles a las administradoras hacer seguimiento de los perfiles, de las alianzas e interacciones entre las emprendedoras a tráves de un formulario. También implementaremos a Watson como asistente personal que les permitirá buscar directamente a los proveedores a traves de un chat y obtener información adicional.

## Arquitectura
El directorio Victoria estará estructurado de la siguiente manera:
- Home
    - Registro 
    - Inicio de sesión
- Barra de navegación: podrán utilizar el buscador, acceder a su perfil y cerrar sesión.
- Directorio: donde podrán consultar la lista completa de proveedores de diferentes categorías y podrás filtrarlo por sector, los mejores puntuados, ubicación y un buscador.
- Resultados: encontrarán fichas técnicas que cumplen con la búsqueda de la emprendedora.
- Perfil: donde podrán consultar sus alianzas, sus proveedores recomendados(favoritos).
    - Favoritos: donde podrán consultar los proveedores que les interesen o cumplen con sus expectativas.
    - Alianzas: emprendedoras que hayan trabajado con otras emprendedoras o que les interese contactarlas.

## Roadmap
- Mail de invitación que las dirigirá a la página de registro.
- De registro llenan un formulario y al terminar las redirige al Directorio.
- Desde esta pantalla podrán acceder a las categorías del directorio.
- Una vez que elijan una categoría verán las fichas técnicas de todos los proveedores de la misma.
- Al elegir un proveedor se abrirá un modal con la ficha técnica general con la información de contacto, calificación y comentarios de otras emprendedoras.

- Desde la barra de navegación seleccionando el logo las regresará al directorio y donde podrán ver las opciones del menú hamburguesa que son:
   -perfil
   -alianzas y proveedores
   -favoritos
   -cerrar sesión

## Tecnologías
- HTML 5
- Javascript ES6
- CSS SASS
- Php, framework: Laravel
- Watson assistent

## Seguridad
Solo podrán registrarse al directorio por medio de un link que les enviarán  por correo electrónico a las emprendedoras las administradoras donde se validará que 
sean parte de la comunidad. 

Solo las administradoras tendrán acceso a la información completa de las emprendedoras. 

Toda la información estará encriptada.

Se utilizará la Tool chain de IBM Cloud y Sonarqube en pruebas unitarias para detectar vulnerabilidades.
