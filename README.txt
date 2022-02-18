Autor: Néstor Sánchez
Última fecha de actualización: 07/02/2022 14:07:50

********************* MOTIVO DE LA APLICACION *******************************************************************************************************************************************
La presente aplicación se ha realizado con el motivo de una Actividad Entregable para la asignatura de Desarrollo de Aplicaciones Web
del modulo de Desarrollo de Aplicaciones Web Online Semipresencial, en 2º curso.

El profesor o cliente que ha pedido la aplicación es Fernando, actual profesor de la asignatura.

La aplicacion consiste en una web donde los usuarios de un juego pueden subir las estadisticas conseguidas en el mismo, la apliacion actua como mediadora entra la bbdd que almacena tanto
las estadisticas subidas como otros datos relacionados con el usuario del juego y las muestra de forma dinamica.

********************* ESTRUCTURA Y CONTENIDO DE LA ENTREGA ******************************************************************************************************************************
La estructura de directorios es la siguiente:

-Directorio Principal
        -config                 **Archivos de configuracion de la bbdd, enrutamiento y variables de sesión.
        -public => index.php    **Archivo público por el cual se accede y donde se inicia el servidor
        -src                    **carpeta que contiene la logica de la aplicacion asi como la interacción con la BBDD.
            +Controllers
            +Core
            +Entity
            +Repository
        -templates              **Direcotorio que contiene todos los archivos (.html) corresponientes a la vista de la aplicación.
        -vendor                 **Carpeta con las librerias auxiliares para usar Composer, Twig y Doctrine (tambien parte del Framework Symphony).

********************* PUESTA EN FUNCIONAMIENTO *******************************************************************************************************************************************
La aplicacion necesita:
    - Recomendable el uso de XAMP que contenga las siguientes versiones:
        - BBDD mysql, aunque no es requisito imprescindible y se puede modificar en config/dbConfig.json.
        - Servidor Apache 2.4.52 (recomendado, no imprescindible, puede funcionar con otras versiones de apache)
        - PHP 8.0.14 (IMPRESCINDIBLE el uso de esta versión).
    - Instalacion de Composer.
    - El archivo de Composer.json debe de incluir estas versiones para los siguientes softwares:
        - Twig version ^3.3
        - Doctrine version ^2.11
        - Symphony/cache version ^6.0
        - Doctrine/annotations version ^1.13


    !!##  COMANDOS necesarios para la puesta en funcionamiento ##!!                     COMANDOS:

    - Creamos una carpeta/directorio donde vayamos a guardar el proyecto
    - Nos posicionamos en ese directorio y ejecutamos el comando:                       git clone https://github.com/nestorsb/AC5-Doctrine .
    - Una vez clonado, nos posicionamos en el directorio /public con el comando:        cd public
    - Iniciamos el servidor apache por el puuerto 8000 con el comando:                  php -S localhost:8000
    - Ya podemos acceder a la aplicacion desde:                                         http://localhost:8000

    - Recordamos que el servicio mysql debe de estar encendido en el panel de comandos de XAMPP

     * Estos comandos son posibles porque la carpeta /vendor ya esta en el proyecto, si deseamos volver a crear esta carpeta o no la tenemos desde un inicio, habria que realizar los siguientes comandos antes que los anteriores:
        - Nos posicionamos en el directorio principal del proyecto.
        - Nos aseguramos que el archivo composer.json esta tal y como se encuentra en el proyecto en github.
        - Con el siguiente comando creariamos la carpeta vendor con todo lo necesario:      composer install


********************* LINKS ***************************************************************************************************************************************************************
Link a video explicativo: https://youtu.be/dYE4A2mitr8

Link a proyecto: https://github.com/nestorsb/AC5-Doctrine

********************* Observaciones *******************************************************************************************************************************************************

Cuando ha habido ausencia de requisitos o explicaciones especificas sobre el desarrollo de alguna parte de la aplicación, esta se ha realizado de la forma más lógica posible bajo el punto de vista del desarrollador
atendiendo siempre al motivo y objetivo de la presente aplicación.




Ejemplo Reflexiva

/**
* @ORM\ManyToOne(targetEntity="Emp")
* @ORM\JoinColum(name="JEFE", referencedColumnName="EMP_NO")
*/
private $jefe

/**
* @ORM\OneToMany(targetEntity="Emp", mappedBy="jefe")
*/
private $empleados

public funcion __construct(){
    $this->empleados = new ArrayCollection;
}



