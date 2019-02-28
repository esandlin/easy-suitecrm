<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_BASIC_SEARCH' => 'Filtro rápido',
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzado',
    'LBL_BASIC_TYPE' => 'Tipo básico',
    'LBL_ADVANCED_TYPE' => 'Tipo avanzado',
    'LBL_SYSOPTS_2' => '¿Qué tipo de base de datos se utilizará para la instancia de SuiteCRM que está a punto de instalar?',
    'LBL_SYSOPTS_DB' => 'Especifique el tipo de base de datos',
    'LBL_SYSOPTS_DB_TITLE' => 'Tipo de base de datos',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Por favor, corrija los siguientes errores antes de continuar:',
    'ERR_DB_VERSION_FAILURE' => 'No se puede verificar la versión de la base de datos.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Proporcione el nombre de usuario para el usuario administrador de SuiteCRM.',
    'ERR_ADMIN_PASS_BLANK' => 'Proporcione la contraseña para el usuario administrador de SuiteCRM. ',
    'ERR_CHECKSYS' => 'Se han detectado errores durante la verificación de compatibilidad. Para que la instalación de SuiteCRM funcione correctamente, siga los pasos adecuados para solucionar los problemas que se enumeran a continuación y presione el botón Volver a verificar o intente la instalación nuevamente.',
    'ERR_CHECKSYS_CALL_TIME' => 'Permitir que la referencia de paso de tiempo de llamada esté activada (debe estar desactivada en php.ini)',
    'ERR_CHECKSYS_CURL' => 'No encontrado: SuiteCRM Scheduler se ejecutará con una funcionalidad limitada.',
    'ERR_CHECKSYS_IMAP' => 'No encontrado: InboundEmail y Campaigns (Email) requieren las bibliotecas IMAP. Tampoco será funcional.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Establezca esto en ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M o más grande en su archivo php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Advertencia: No se puede escribir',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Su versión de PHP no es compatible con SuiteCRM. Deberá instalar una versión que sea compatible con la aplicación SuiteCRM. Consulte la Matriz de compatibilidad en las Notas de la versión para ver las versiones de PHP compatibles. Tu version es ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Su versión de IIS no es compatible con SuiteCRM. Deberá instalar una versión que sea compatible con la aplicación SuiteCRM. Consulte la Matriz de compatibilidad en las Notas de la versión para ver las versiones de IIS compatibles. Tu version es ',
    'ERR_CHECKSYS_FASTCGI' => 'Detectamos que no está utilizando una asignación de controlador FastCGI para PHP. Deberá instalar / configurar una versión que sea compatible con la aplicación SuiteCRM. Consulte la Matriz de compatibilidad en las Notas de la versión para ver las versiones compatibles. Consulte <a href="http://www.iis.net/php/" target="_blank"> http://www.iis.net/php/ </a> para obtener más información. ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Para obtener una experiencia óptima con IIS / FastCGI sapi, configure fastcgi.logging en 0 en su archivo php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Base de datos no disponible',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Soporte de base de datos no se encontró. Asegúrese de tener los controladores necesarios para uno de los siguientes tipos de bases de datos compatibles: MySQL o MS SQLServer. Es posible que necesite descomentar la extensión en el archivo php.ini, o recompilar con el archivo binario correcto, dependiendo de su versión de PHP. Consulte su Manual de PHP para obtener más información sobre cómo habilitar el soporte de base de datos.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'No se encontraron las funciones asociadas con las bibliotecas de analizador XML que necesita la aplicación SuiteCRM. Es posible que necesite descomentar la extensión en el archivo php.ini, o recompilar con el archivo binario correcto, dependiendo de su versión de PHP. Consulte su Manual de PHP para obtener más información.',
    'ERR_CHECKSYS_MBSTRING' => 'No se encontraron las funciones asociadas con la extensión PHP de cadenas de múltiples bytes (mbstring) que necesita la aplicación SuiteCRM. <br/> <br/> En general, el módulo mbstring no está habilitado de manera predeterminada en PHP y debe activarse con --enable-mbstring cuando se construye el binario de PHP. Consulte su Manual de PHP para obtener más información sobre cómo habilitar el soporte de mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'El archivo de configuración existe pero no se puede escribir. Por favor, siga los pasos necesarios para que el archivo sea grabable. Dependiendo de su sistema operativo, esto puede requerir que cambie los permisos ejecutando chmod 766, o haga clic derecho en el nombre del archivo para acceder a las propiedades y desmarque la opción de solo lectura.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'El archivo de anulación de configuración existe pero no se puede escribir. Por favor, siga los pasos necesarios para que el archivo sea grabable. Dependiendo de su sistema operativo, esto puede requerir que cambie los permisos ejecutando chmod 766, o haga clic derecho en el nombre del archivo para acceder a las propiedades y desmarque la opción de solo lectura.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'El Directorio personalizado existe pero no se puede escribir. Es posible que tenga que cambiar los permisos en él (chmod 766) o hacer clic con el botón derecho en él y desactivar la opción de solo lectura, dependiendo de su sistema operativo. Por favor, siga los pasos necesarios para que el archivo sea grabable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Los archivos o directorios enumerados a continuación no se pueden escribir o faltan y no se pueden crear. Dependiendo de su sistema operativo, corregirlo puede requerir cambiar los permisos en los archivos o el directorio principal (chmod 755), o hacer clic con el botón derecho en el directorio principal y desmarcar la opción 'solo lectura' y aplicarla a todas las subcarpetas.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Anulación de configuración',
    'ERR_CHECKSYS_SAFE_MODE' => 'El modo seguro está activado (es posible que desee deshabilitarlo en php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Compatibilidad con ZLib no encontrada: SuiteCRM obtiene enormes beneficios de rendimiento con la compresión zlib.',
    'ERR_CHECKSYS_ZIP' => 'No se encontró soporte ZIP: SuiteCRM necesita soporte ZIP para procesar archivos comprimidos.',
    'ERR_CHECKSYS_PCRE' => 'No se encontró la biblioteca PCRE: SuiteCRM necesita la biblioteca PCRE para procesar el estilo Perl de la coincidencia de patrones de expresión regular.',
    'ERR_CHECKSYS_PCRE_VER' => 'Versión de la biblioteca PCRE: SuiteCRM necesita la biblioteca PCRE 7.0 o superior para procesar el estilo Perl de la coincidencia de patrones de expresión regular.',
    'ERR_DB_ADMIN' => 'El nombre de usuario y / o la contraseña del administrador de la base de datos no es válido y no se pudo establecer una conexión con la base de datos. Por favor ingrese un nombre de usuario y contraseña válidos. (Error: ',
    'ERR_DB_ADMIN_MSSQL' => 'El nombre de usuario y / o la contraseña del administrador de la base de datos no es válido y no se pudo establecer una conexión con la base de datos. Por favor ingrese un nombre de usuario y contraseña válidos.',
    'ERR_DB_EXISTS_NOT' => 'La base de datos especificada no existe.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'La base de datos ya existe con los datos de configuración. Para ejecutar una instalación con la base de datos elegida, vuelva a ejecutar la instalación y elija: "¿Eliminar y volver a crear las tablas de SuiteCRM existentes?". Para actualizar, use el Asistente de actualización en la Consola de administración. Lea la documentación de actualización que se encuentra en <a href="https://suitecrm.com/wiki/index.php/Upgrade" target="_new"> aquí </a>.',
    'ERR_DB_EXISTS' => 'El nombre de la base de datos provisto ya existe, no se puede crear otro con el mismo nombre.',
    'ERR_DB_EXISTS_PROCEED' => 'El nombre de la base de datos proporcionado ya existe. Puede <br> 1. pulsa el botón Atrás y elige un nuevo nombre de base de datos <br> 2. haga clic en siguiente y continúe, pero se eliminarán todas las tablas existentes en esta base de datos. <strong> Esto significa que tus tablas y datos se perderán. </strong>',
    'ERR_DB_HOSTNAME' => 'El nombre del host no puede estar en blanco.',
    'ERR_DB_INVALID' => 'Tipo de base de datos no válido seleccionado.',
    'ERR_DB_LOGIN_FAILURE' => 'El host de la base de datos, el nombre de usuario y / o la contraseña proporcionados no son válidos y no se pudo establecer una conexión con la base de datos. Por favor ingrese un host válido, nombre de usuario y contraseña',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'El host de la base de datos, el nombre de usuario y / o la contraseña proporcionados no son válidos y no se pudo establecer una conexión con la base de datos. Por favor ingrese un host válido, nombre de usuario y contraseña',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'El host de la base de datos, el nombre de usuario y / o la contraseña proporcionados no son válidos y no se pudo establecer una conexión con la base de datos. Por favor ingrese un host válido, nombre de usuario y contraseña',
    'ERR_DB_MYSQL_VERSION' => 'Su versión de MySQL (% s) no es compatible con SuiteCRM. Deberá instalar una versión que sea compatible con la aplicación SuiteCRM. Consulte la Matriz de compatibilidad en las Notas de la versión para ver las versiones de MySQL compatibles.',
    'ERR_DB_NAME' => 'El nombre de la base de datos no puede estar en blanco.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "El nombre de la base de datos no puede contener un '\\', '/' o '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "El nombre de la base de datos no puede comenzar con un número, '#', o '@' y no puede contener un espacio, '\"', \"'\", '*', '/', '\', '?', ':', '<', '>', '&', '!', or '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "El nombre de la base de datos solo puede estar formado por caracteres alfanuméricos y los símbolos '#', '_' o '$'",
    'ERR_DB_PASSWORD' => 'Las contraseñas proporcionadas para el administrador de la base de datos de SuiteCRM no coinciden. Vuelva a ingresar las mismas contraseñas en los campos de contraseña.',
    'ERR_DB_PRIV_USER' => 'Proporcione un nombre de usuario administrador de base de datos. El usuario es necesario para la conexión inicial a la base de datos.',
    'ERR_DB_USER_EXISTS' => 'El nombre de usuario para el usuario de la base de datos SuiteCRM ya existe, no se puede crear otro con el mismo nombre. Por favor, introduzca un nuevo nombre de usuario.',
    'ERR_DB_USER' => 'Introduzca un nombre de usuario para el administrador de la base de datos de SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Por favor, corrija los siguientes errores antes de continuar:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Las contraseñas proporcionadas para el usuario de la base de datos SuiteCRM no coinciden. Vuelva a ingresar las mismas contraseñas en los campos de contraseña.',
    'ERR_ERROR_GENERAL' => 'Los siguientes errores fueron encontrados:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'No se puede eliminar el archivo: ',
    'ERR_LANG_MISSING_FILE' => 'No se puede encontrar el archivo: ',
    'ERR_LANG_NO_LANG_FILE' => 'No se encontró ningún archivo de paquete de idioma en include / language adentro: ',
    'ERR_LANG_UPLOAD_1' => 'Hubo un problema con tu subida. Inténtalo de nuevo.',
    'ERR_LANG_UPLOAD_2' => 'Los paquetes de idiomas deben ser archivos ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP no pudo mover el archivo temporal al directorio de actualización.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'El directorio de registro proporcionado no es un directorio válido.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'El directorio de registro proporcionado no es un directorio de escritura.',
    'ERR_NO_DIRECT_SCRIPT' => 'No se puede procesar el script directamente.',
    'ERR_NO_SINGLE_QUOTE' => 'No se puede utilizar la comilla simple para ',
    'ERR_PASSWORD_MISMATCH' => 'Las contraseñas proporcionadas para el usuario administrador de SuiteCRM no coinciden. Vuelva a ingresar las mismas contraseñas en los campos de contraseña.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'No se puede escribir en el archivo <span class = stop> config.php </span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Puede continuar esta instalación creando manualmente el archivo config.php y pegando la información de configuración a continuación en el archivo config.php. Sin embargo, usted <strong> debe </strong> crear el archivo config.php antes de continuar con el siguiente paso.',
    'ERR_PERFORM_CONFIG_PHP_3' => '¿Recordaste crear el archivo config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Advertencia: No se pudo escribir en el archivo config.php. Por favor, asegúrese de que existe.',
    'ERR_PERFORM_HTACCESS_1' => 'No se puede escribir al ',
    'ERR_PERFORM_HTACCESS_2' => ' expediente.',
    'ERR_PERFORM_HTACCESS_3' => 'Si desea proteger su archivo de registro para que no sea accesible a través del navegador, cree un archivo .htaccess en su directorio de registro con la línea:',
    'ERR_PERFORM_NO_TCPIP' => '<b> No pudimos detectar una conexión a Internet. </b> Cuando tenga una conexión, visite <a href="http://www.suitecrm.com/"> http://www.suitecrm.com / </a> para registrarse en SuiteCRM. Al informarnos un poco sobre cómo planea su empresa utilizar SuiteCRM, podemos asegurarnos de que siempre estamos entregando la aplicación adecuada para sus necesidades comerciales.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'El directorio de sesión proporcionado no es un directorio válido.',
    'ERR_SESSION_DIRECTORY' => 'El directorio de sesión proporcionado no es un directorio grabable.',
    'ERR_SESSION_PATH' => 'La ruta de la sesión es obligatoria si desea especificar la suya.',
    'ERR_SI_NO_CONFIG' => 'No incluyó config_si.php en la raíz del documento, o no definió $ sugar_config_si en config.php',
    'ERR_SITE_GUID' => 'La identificación de la aplicación es obligatoria si desea especificar la suya propia.',
    'ERROR_SPRITE_SUPPORT' => "Actualmente no podemos localizar la biblioteca GD, por lo que no podrá utilizar la funcionalidad CSS Sprite.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Advertencia: la configuración de PHP debe cambiarse para permitir que se carguen archivos de al menos 6 MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Cargar tamaño de archivo',
    'ERR_URL_BLANK' => 'Proporcione la URL base para la instancia de SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'No se pudo localizar el registro de instalación de',
    'ERROR_MANIFEST_TYPE' => 'El archivo de manifiesto debe especificar el tipo de paquete.',
    'ERROR_PACKAGE_TYPE' => 'El archivo de manifiesto especifica un tipo de paquete no reconocido',
    'ERROR_VERSION_INCOMPATIBLE' => 'El archivo cargado no es compatible con esta versión de SuiteCRM: ',

    'LBL_BACK' => 'Regresa',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_ACCEPT' => 'Acepto',
    'LBL_CHECKSYS_CACHE' => 'Subdirectorios de caché de escritura',
    'LBL_DROP_DB_CONFIRM' => 'El nombre de la base de datos provisto ya existe. <br> Usted puede: <br> 1. Haga clic en el botón Cancelar y elija un nuevo nombre de base de datos, o <br> 2. Haga clic en el botón Aceptar y continúe. Se eliminarán todas las tablas existentes en la base de datos. <strong> Esto significa que todas las tablas y los datos preexistentes serán eliminados. </strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Componente',
    'LBL_CHECKSYS_CONFIG' => 'Archivo de configuración de SuiteCRM de escritura (config.php)',
    'LBL_CHECKSYS_CURL' => 'Módulo cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Directorio personalizado grabable',
    'LBL_CHECKSYS_DATA' => 'Sub-directorios de datos de escritura',
    'LBL_CHECKSYS_IMAP' => 'Módulo IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Módulo de cadenas MB',
    'LBL_CHECKSYS_MEM_OK' => 'OK (sin límite)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Ilimitado)',
    'LBL_CHECKSYS_MEM' => 'Límite de memoria de PHP',
    'LBL_CHECKSYS_MODULE' => 'Módulos escriturables Sub-directorios y archivos',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'No disponible',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'Ubicación de su archivo de configuración de PHP (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'Versión PHP',
    'LBL_CHECKSYS_IISVER' => 'Versión IIS',
    'LBL_CHECKSYS_RECHECK' => 'Volver a comprobar',
    'LBL_CHECKSYS_STATUS' => 'Estado',
    'LBL_CHECKSYS_TITLE' => 'Comprobación del sistema de aceptación',
    'LBL_CHECKSYS_XML' => 'Análisis XML',
    'LBL_CHECKSYS_ZLIB' => 'Módulo de compresión ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Módulo de Manejo ZIP',
    'LBL_CHECKSYS_PCRE' => 'Biblioteca PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Por favor arregle los siguientes archivos o directorios antes de continuar:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Por favor, corrija los siguientes directorios de módulos y los archivos debajo de ellos antes de continuar:',
    'LBL_CHECKSYS_UPLOAD' => 'Directorio de carga grabable',
    'LBL_CLOSE' => 'Cierra',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'ser creado',
    'LBL_CONFIRM_DB_TYPE' => 'Tipo de base de datos',
    'LBL_CONFIRM_NOT' => 'no',
    'LBL_CONFIRM_TITLE' => 'Confirmar Configuraciones',
    'LBL_CONFIRM_WILL' => 'Hará',
    'LBL_DBCONF_DB_DROP' => 'Tablas sueltas',
    'LBL_DBCONF_DB_NAME' => 'Nombre de la base de datos',
    'LBL_DBCONF_DB_PASSWORD' => 'Contraseña de usuario de la base de datos de SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'Vuelva a ingresar la contraseña del usuario de la base de datos de SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'Usuario de la base de datos de SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Usuario de la base de datos de SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Nombre de usuario del administrador de la base de datos',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Contraseña de administrador de base de datos',
    'LBL_DBCONF_DEMO_DATA' => '¿Rellenar la base de datos con datos de demostración?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Elige Demo Data',
    'LBL_DBCONF_HOST_NAME' => 'Nombre de host',
    'LBL_DBCONF_HOST_INSTANCE' => 'Instancia de host',
    'LBL_DBCONFIG_SECURITY' => 'Por motivos de seguridad, puede especificar un usuario exclusivo de la base de datos para conectarse a la base de datos SuiteCRM. Este usuario debe poder escribir, actualizar y recuperar datos en la base de datos de SuiteCRM que se creará para esta instancia. Este usuario puede ser el administrador de la base de datos especificado anteriormente, o puede proporcionar información de usuario de la base de datos nueva o existente.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Proporcionar usuario existente',
    'LBL_DBCONFIG_CREATE_DD' => 'Definir usuario para crear',
    'LBL_DBCONFIG_SAME_DD' => 'Igual que el usuario administrador',
    'LBL_DBCONF_TITLE' => 'Configuración de la base de datos',
    'LBL_DBCONF_TITLE_NAME' => 'Proporcionar el nombre de la base de datos',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Proporcionar información de usuario de base de datos',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Contraseña',
    'LBL_DISABLED_DESCRIPTION_2' => 'Una vez que se haya realizado este cambio, puede hacer clic en el botón "Iniciar" a continuación para comenzar su instalación. <i> Una vez completada la instalación, deseará cambiar el valor de \'installer_locked \' a \'true \'. </i>',
    'LBL_DISABLED_DESCRIPTION' => 'El instalador ya se ha ejecutado una vez. Como medida de seguridad, se ha impedido que se ejecute una segunda vez. Si está absolutamente seguro de que desea volver a ejecutarlo, vaya a su archivo config.php y localice (o agregue) una variable llamada \'installer_locked \' y configúrela en \'false \'. La línea debe verse así:',
    'LBL_DISABLED_HELP_1' => 'Para obtener ayuda sobre la instalación, visite SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://suitecrm.com/suitecrm/forum/suite-forum',
    'LBL_DISABLED_HELP_2' => 'foros de soporte',
    'LBL_DISABLED_TITLE_2' => 'La instalación de SuiteCRM ha sido deshabilitada',
    'LBL_HELP' => 'Ayuadame',
    'LBL_INSTALL' => 'Instala',
    'LBL_INSTALL_TYPE_TITLE' => 'Opciones de instalación',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Elija el tipo de instalación',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Instalación típica</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Instalacion personalizada</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Requiere información mínima para la instalación. Recomendado para nuevos usuarios.',
    'LBL_INSTALL_TYPE_MSG3' => 'Proporciona opciones adicionales para establecer durante la instalación. La mayoría de estas opciones también están disponibles después de la instalación en las pantallas de administración. Recomendado para usuarios avanzados.',
    'LBL_LANG_1' => 'Para utilizar un idioma en SuiteCRM que no sea el idioma predeterminado (inglés de EE. UU.), Puede cargar e instalar el paquete de idioma en este momento. También podrá cargar e instalar paquetes de idiomas desde la aplicación SuiteCRM. Si desea omitir este paso, haga clic en Siguiente.',
    'LBL_LANG_BUTTON_COMMIT' => 'Instala',
    'LBL_LANG_BUTTON_REMOVE' => 'Quitarlo',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Desinstalar',
    'LBL_LANG_BUTTON_UPLOAD' => 'Subir',
    'LBL_LANG_NO_PACKS' => 'Nada',
    'LBL_LANG_PACK_INSTALLED' => 'Se han instalado los siguientes paquetes de idioma: ',
    'LBL_LANG_PACK_READY' => 'Los siguientes paquetes de idiomas están listos para ser instalados: ',
    'LBL_LANG_SUCCESS' => 'El paquete de idioma fue subido con éxito.',
    'LBL_LANG_TITLE' => 'Paquete de idioma',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Instalando SuiteCRM ahora. Esto puede tardar unos minutos.',
    'LBL_LANG_UPLOAD' => 'Subir un paquete de idioma',
    'LBL_LICENSE_ACCEPTANCE' => 'Aceptación de la licencia',
    'LBL_LICENSE_CHECKING' => 'Comprobando la compatibilidad del sistema.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Medio ambiente',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verificación de credenciales de base de datos.',
    'LBL_LICENSE_CHECK_PASSED' => 'El sistema pasó la verificación de compatibilidad.',
    'LBL_CREATE_CACHE' => 'Preparando para instalar...',
    'LBL_LICENSE_REDIRECT' => 'Redirigiendo en ',
    'LBL_LICENSE_I_ACCEPT' => 'Acepto',
    'LBL_LICENSE_PRINTABLE' => ' Vista imprimible ',
    'LBL_PRINT_SUMM' => 'Imprimir resumen',
    'LBL_LICENSE_TITLE_2' => 'Licencia SuiteCRM',
    'LBL_LOCALE_NAME_FIRST' => 'Jose',
    'LBL_LOCALE_NAME_LAST' => 'Sanchez',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',
    'LBL_ML_ACTION' => 'Acción',
    'LBL_ML_DESCRIPTION' => 'Descripción',
    'LBL_ML_INSTALLED' => 'Fecha de instalación',
    'LBL_ML_NAME' => 'Nombre',
    'LBL_ML_PUBLISHED' => 'Fecha de publicación',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'No instalable',
    'LBL_ML_VERSION' => 'Versión',
    'LBL_MSSQL' => 'servidor SQL',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Controlador de Microsoft SQL Server para PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (extensión mysqli)',
    'LBL_NEXT' => 'Siguiente',
    'LBL_NO' => 'No',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Configuración de la contraseña del administrador del sitio',
    'LBL_PERFORM_CONFIG_PHP' => 'Creando el archivo de configuracion de SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Creando la base de datos</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>encender</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Creando el nombre de usuario y contraseña de la base de datos ...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Creación de datos predeterminados de SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Creación de trabajos del programador por defecto',
    'LBL_PERFORM_DEFAULT_USERS' => 'Creando usuarios por defecto',
    'LBL_PERFORM_DEMO_DATA' => 'Rellenar las tablas de la base de datos con datos de demostración (esto puede tardar un poco)',
    'LBL_PERFORM_DONE' => 'Terminado<br>',
    'LBL_PERFORM_FINISH' => 'Terminado',
    'LBL_PERFORM_OUTRO_1' => 'La configuración de SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' ya está completo!',
    'LBL_PERFORM_OUTRO_3' => 'Tiempo Total: ',
    'LBL_PERFORM_OUTRO_4' => ' segundos.',
    'LBL_PERFORM_OUTRO_5' => 'Memoria aproximada utilizada: ',
    'LBL_PERFORM_OUTRO_6' => ' bytes.',
    'LBL_PERFORM_SUCCESS' => '¡Éxito!',
    'LBL_PERFORM_TABLES' => 'Creación de tablas de aplicación SuiteCRM, tablas de auditoría y metadatos de relaciones',
    'LBL_PERFORM_TITLE' => 'Realizar la configuración',
    'LBL_PRINT' => 'Imprimirse',
    'LBL_REG_CONF_1' => 'Complete el breve formulario a continuación para recibir anuncios de productos, noticias de capacitación, ofertas especiales e invitaciones a eventos especiales de SuiteCRM. No vendemos, alquilamos, compartimos ni distribuimos la información recopilada aquí a terceros.',
    'LBL_REG_CONF_3' => 'Gracias por registrarte. Haga clic en el botón Finalizar para iniciar sesión en SuiteCRM. Deberá iniciar sesión por primera vez con el nombre de usuario "admin" y la contraseña que ingresó en el paso 2.',
    'LBL_REG_TITLE' => 'Registro',
    'LBL_REQUIRED' => '* Campo requerido',
    'LBL_SITECFG_ADMIN_Name' => 'Nombre de administrador de la aplicación SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Vuelva a ingresar la contraseña del usuario administrador de SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Contraseña de usuario del administrador de SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID de aplicación',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Si se selecciona, debe proporcionar una ID de aplicación para anular la ID generada automáticamente. El ID garantiza que las sesiones de una instancia de SuiteCRM no sean utilizadas por otras instancias. Si tiene un grupo de instalaciones de SuiteCRM, todas deben compartir la misma ID de aplicación.',
    'LBL_SITECFG_CUSTOM_ID' => 'Proporcione su propia ID de aplicación',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Si se selecciona, debe especificar un directorio de registro para anular el directorio predeterminado para el registro de SuiteCRM. Independientemente de dónde se encuentre el archivo de registro, el acceso a él a través de un navegador web se restringirá mediante un redireccionamiento .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Utilice un directorio de registro personalizado',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Si se selecciona, debe proporcionar una carpeta segura para almacenar la información de la sesión de SuiteCRM. Esto se puede hacer para evitar que los datos de sesión sean vulnerables en servidores compartidos.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Utilice un directorio de sesión personalizado para SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Por favor, corrija los siguientes errores antes de continuar:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Directorio de registro',
    'LBL_SITECFG_SESSION_PATH' => 'Ruta al directorio de la sesión <br> (debe ser de escritura)',
    'LBL_SITECFG_SITE_SECURITY' => 'Seleccione las opciones de seguridad',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Si se selecciona, el sistema verificará periódicamente las versiones actualizadas de la aplicación.',
    'LBL_SITECFG_SUITE_UP' => '¿Buscar actualizaciones automáticamente?',
    'LBL_SITECFG_TITLE' => 'Configuración del sitio',
    'LBL_SITECFG_TITLE2' => 'Identificar usuario de administración',
    'LBL_SITECFG_SECURITY_TITLE' => 'Seguridad del sitio',
    'LBL_SITECFG_URL' => 'URL de la instancia de SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => '¿Enviar estadísticas anónimas de uso?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Si se selecciona, SuiteCRM enviará estadísticas <b> anónimas </b> sobre su instalación a SuiteCRM Inc. cada vez que su sistema verifique nuevas versiones. Esta información nos ayudará a comprender mejor cómo se usa la aplicación y a guiar las mejoras al producto.',
    'LBL_SITECFG_URL_MSG' => 'Ingrese la URL que se usará para acceder a la instancia de SuiteCRM después de la instalación. La URL también se utilizará como base para las URL en las páginas de la aplicación SuiteCRM. La URL debe incluir el servidor web o el nombre de la máquina o la dirección IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Introduzca un nombre para su sistema. Este nombre se mostrará en la barra de título del navegador cuando los usuarios visiten la aplicación SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Después de la instalación, deberá utilizar el usuario administrador de SuiteCRM (nombre de usuario predeterminado = admin) para iniciar sesión en la instancia de SuiteCRM. Introduzca una contraseña para este usuario administrador. Esta contraseña se puede cambiar después del inicio de sesión inicial. También puede ingresar otro nombre de usuario de administrador para usar además del valor predeterminado proporcionado.',
    'LBL_SITECFG_COLLATION_MSG' => 'Seleccione la configuración de clasificación (clasificación) para su sistema. Esta configuración creará las tablas con el idioma específico que utilice. En caso de que su idioma no requiera configuraciones especiales, utilice el valor predeterminado.',
    'LBL_SPRITE_SUPPORT' => 'Apoyo Sprite',
    'LBL_SYSTEM_CREDS' => 'Credenciales del sistema',
    'LBL_SYSTEM_ENV' => 'Entorno del sistema',
    'LBL_SHOW_PASS' => 'Mostrar contraseñas',
    'LBL_HIDE_PASS' => 'Ocultar contraseñas',
    'LBL_HIDDEN' => '<i>(oculto)</i>',
    'LBL_STEP1' => 'Paso 1 de 2 - Requisitos previos a la instalación',
    'LBL_STEP2' => 'Paso 2 de 2 - Configuración',
    'LBL_STEP' => 'Paso',
    'LBL_TITLE_WELCOME' => 'Bienvenido a la SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => '¿Estás listo para instalar?',
    'REQUIRED_SYS_COMP' => 'Componentes del sistema requeridos',
    'REQUIRED_SYS_COMP_MSG' =>
        'Antes de comenzar, asegúrese de tener las versiones compatibles de los siguientes componentes del sistema: <br>
                      <ul>
                      <li> Base de datos / Sistema de gestión de bases de datos (ejemplos: MariaDB, MySQL o SQL Server)</li>
                      <li> Servidor Web (Apache, IIS)</li>
                      </ul>
                      Consulte la Matriz de compatibilidad en las Notas de la versión de
                      Componentes de sistema compatibles para la versión de SuiteCRM que está instalando. <br>',
    'REQUIRED_SYS_CHK' => 'Comprobación inicial del sistema',
    'REQUIRED_SYS_CHK_MSG' =>
        'Cuando comience el proceso de instalación, se realizará una comprobación del sistema en el servidor web en el que se encuentran los archivos SuiteCRM para
                      asegúrese de que el sistema esté configurado correctamente y tenga todos los componentes necesarios
                      para completar con éxito la instalación. <br> <br>
                      El sistema verifica todo lo siguiente: <br>
                      <ul>
                      <li><b>versión de PHP </b> & # 8211; debe ser compatible con la aplicación</li>
                      <li><b>Variables de sesión </b> & # 8211; debe estar funcionando correctamente</li>
                      <li><b>MB Strings </b> & # 8211; debe estar instalado y habilitado en php.ini</li>
                      <li><b>Soporte de base de datos </b> & # 8211; debe existir para MariaDB, MySQL o SQL Server</li>
                      <li><b>Config.php </b> & # 8211; debe existir y debe tener los permisos adecuados para que pueda escribirse </li>
                      <li> Los siguientes archivos SuiteCRM deben poder escribirse: <ul> <li> <b> / custom </li>
                      <li> / caché </li>
                      <li> / modules </li>
                      <li>/upload</b></li></ul></li> </ul>
                                  Si la verificación falla, no podrá continuar con la instalación.
                                  Aparecerá un mensaje de error, explicando por qué su sistema no pasó la verificación.
                                  Después de realizar los cambios necesarios, puede volver a realizar la verificación del sistema para continuar con la instalación. <br>',


    'REQUIRED_INSTALLTYPE' => 'Instalación típica o personalizada',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Después de realizar la verificación del sistema, puede elegir
                      La instalación típica o la personalizada. <br> <br>
                      Para las instalaciones <b> Típica </b> y <b> Personalizada </b>, deberá conocer lo siguiente: <br>
                      <ul>
                      <li> <b> Tipo de base de datos </b> que alojará los datos de SuiteCRM <ul> <li> Base de datos compatible
                      tipos: MariaDB, MySQL o SQL Server. <br> <br> </li></ul> </li>
                      <li> <b> Nombre del servidor web </b> o máquina (host) en el que se encuentra la base de datos
                      <ul> <li> Esto puede ser <i> localhost </i> si la base de datos está en su computadora local o en el mismo servidor web o máquina que sus archivos SuiteCRM. <br> <br> </li> < / ul> </li>
                      <li> <b> Nombre de la base de datos </b> que le gustaría usar para alojar los datos de SuiteCRM </li>
                        <ul>
                          <li> Es posible que ya tenga una base de datos existente que le gustaría usar. Si
                          proporciona el nombre de una base de datos existente, las tablas en la base de datos
                          se eliminará durante la instalación cuando se defina el esquema para la base de datos SuiteCRM. </li>
                          <li> Si aún no tiene una base de datos, el nombre que proporcione se usará para
                          la nueva base de datos que se crea para la instancia durante la instalación. <br> <br> </li>
                        </ul>
                      
<li> <b> Nombre de usuario y contraseña del administrador de la base de datos </b> <ul> <li> El administrador de la base de datos debe poder crear tablas y usuarios y escribir en la base de datos. </li> <li> Es posible que deba
                      comuníquese con el administrador de la base de datos para obtener esta información si la base de datos está
                      no se encuentra en su computadora local y / o si no es el administrador de la base de datos. <br> <br> </ul></li> </li>
                      <li> <b> Nombre de usuario y contraseña de la base de datos de SuiteCRM </b>
                      </li>
                        <ul>
                          <li> El usuario puede ser el administrador de la base de datos, o puede proporcionar el nombre de
                          Otro usuario de la base de datos existente. </li>
                          <li> Si desea crear un nuevo usuario de base de datos para este propósito,
                          poder proporcionar un nuevo nombre de usuario y contraseña durante el proceso de instalación,
                          y el usuario será creado durante la instalación. </li>
                        </ul></ul> <p>

                     Para la configuración <b> Personalizada </b>, es posible que también necesite conocer lo siguiente: <br>
                      <ul>
                      <li> <b> URL que se utilizará para acceder a la instancia de SuiteCRM </b> una vez instalada.
                      Esta URL debe incluir el servidor web o el nombre de la máquina o la dirección IP. <br> <br> </li>
                                  <li> [Opcional] <b> Ruta al directorio de la sesión </b> si desea utilizar una personalizada
                                  Directorio de sesión para obtener información de SuiteCRM para evitar que los datos de sesión
                                  ser vulnerable en servidores compartidos. <br> <br> </li>
                                  <li> [Opcional] <b> Ruta a un directorio de registro personalizado </b> si desea anular el directorio predeterminado para el registro de SuiteCRM. <br> <br> </li>
                                  <li> [Opcional] <b> ID de aplicación </b> si desea anular el autogenerado
                                  ID que garantiza que las sesiones de una instancia de SuiteCRM no sean utilizadas por otras instancias. <br> <br> </li>
                                  <li> <b> Conjunto de caracteres </b> más comúnmente usado en su localidad. <br> <br> </li> </ul>
                                  Para obtener información más detallada, consulte la Guía de instalación.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Lea la siguiente información importante antes de continuar con la instalación. La información lo ayudará a determinar si está o no listo para instalar la aplicación en este momento.',
    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Elige tu idioma</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Asistente de configuración',
    'LBL_WIZARD_TITLE' => 'Asistente de configuración de SuiteCRM: ',
    'LBL_YES' => 'sí',

    'LBL_PATCHES_TITLE' => 'Instalar los últimos parches',
    'LBL_MODULE_TITLE' => 'Instalar paquetes de idioma',
    'LBL_PATCH_1' => 'Si desea omitir este paso, haga clic en Siguiente.',
    'LBL_PATCH_TITLE' => 'Parche del sistema',
    'LBL_PATCH_READY' => 'Los siguientes parches están listos para ser instalados:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM confía en las sesiones de PHP para almacenar información importante mientras está conectado a este servidor web. Su instalación de PHP no tiene la información de la sesión configurada correctamente.
<br> <br> Un error de configuración común es que la directiva <b> 'session.save_path' </b> no apunta a un directorio válido. <br>
<br> Corrija su <a target=_new href='http://us2.php.net/manual/en/ref.session.php'> configuración de PHP </a> en el archivo php.ini que se encuentra a continuación.",
    'LBL_SESSION_ERR_TITLE' => 'Error de configuración de sesiones de PHP',
    'LBL_SYSTEM_NAME' => 'Nombre del sistema',
    'LBL_COLLATION' => 'Configuraciones de colación',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Proporcione un nombre de sistema para la instancia de SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Seleccione un archivo de parche de su computadora local',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Se requiere php versión 5 o superior.',
    'LBL_MINIMUM_PHP_VERSION' => 'La versión mínima de Php requerida es 5.1.0. La versión de Php recomendada es 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Tu versión actual de php es ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' La versión de php recomendada es 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'El modo Php Backward Compatibility está activado. Establezca zend.ze1_compatibility_mode en Off para continuar.',
    'LBL_STREAM' => 'PHP permite usar stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Información de cuenta nueva',
        'type' => 'sistema',
        'description' => 'This template is used when the System Administrator sends a new password to a user.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Aquí está el nombre de usuario y la contraseña temporal de su cuenta:
Nombre de usuario : $contact_user_user_name
Contraseña : $contact_user_user_hash

$config_site_url

Después de iniciar sesión con la contraseña anterior, es posible que deba restablecer la contraseña a una de su elección.',
        'name' => 'Correo electrónico de contraseña generado por el sistema',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Restablecer la contraseña de su cuenta',
        'type' => 'sistema',
        'description' => "Esta plantilla se utiliza para enviar a un usuario un enlace para hacer clic para restablecer la contraseña de la cuenta del usuario.",
        'body' => '
<div> <borde de tabla = \ "0 \" cellspacing = \ "0 \" cellpadding = \ "0 \ width =" 550 "align = \" \ & quot; \ & quot; center \ & quot; \ & quot; \ " > <tbody> <tr> <td colspan = \ "2 \"> <p> Recientemente solicitó en $ contact_user_pwd_last_changed para poder restablecer la contraseña de su cuenta. </p> <p> Haga clic en el enlace de abajo para restablecer su contraseña: </p> <p> $ contact_user_link_guid </p> </td> </tr> <tr> <td colspan = \ "2 \" > </td> </tr> </tbody> </table> </div>',
        'txt_body' => 'Recientemente solicitó en $ contact_user_pwd_last_changed para poder restablecer la contraseña de su cuenta.

Haga clic en el enlace de abajo para restablecer su contraseña:

$contact_user_link_guid',
        'name' => 'Contraseña olvidada email',
    ),
    
    'two_factor_auth_email' => array(
        'subject' => 'Código de autenticación de dos factores',
        'type' => 'sistema',
        'description' => "Esta plantilla se utiliza para enviar a un usuario un código para la autenticación de dos factores.",
        'body' => '<div> <borde de tabla = \ "0 \" cellspacing = \ "0 \" cellpadding = \"0 \ width =" 550 "align = \" \& quot; \ & quot; center \ & quot; \ & quot; \ " > <tbody> <tr> <td colspan = \"2 \"> <p> El código de autenticación de dos factores es <b> $ code </b>. </p> </td> </tr> <tr> <td colspan = \"2 \"> </td> </tr> </tbody> </table> </div>',
        'txt_body' => 'El código de autenticación de dos factores es $code.',
        'name' => 'Correo electrónico de autenticación de dos factores',
    ),

    // SMTP settings
    'LBL_FROM_NAME' => '"De" Nombre:',
    'LBL_FROM_ADDR' => '"De la Dirección:',
    'LBL_WIZARD_SMTP_DESC' => 'Proporcione la cuenta de correo electrónico que se utilizará para enviar correos electrónicos, como las notificaciones de asignación y las nuevas contraseñas de usuario. Los usuarios recibirán correos electrónicos de SuiteCRM, tal como se enviaron desde la cuenta de correo electrónico especificada.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Elija su proveedor de correo electrónico:',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Intercambiar',
    'LBL_SMTPTYPE_OTHER' => 'Otro',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificación del servidor SMTP',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Enable SMTP over SSL or TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Contraseña:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Permitir a los usuarios utilizar esta cuenta para el correo electrónico saliente:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Cuando se selecciona esta opción, todos los usuarios podrán enviar correos electrónicos utilizando la misma cuenta de correo saliente utilizada para enviar notificaciones y alertas del sistema. Si la opción no está seleccionada, los usuarios aún pueden usar el servidor de correo saliente después de proporcionar su propia información de cuenta.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Contraseña:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Intercambiar Contraseña:',
    'LBL_EXCHANGE_SMTPUSER' => 'Cambiar nombre de usuario:',
    'LBL_EXCHANGE_SMTPPORT' => 'Intercambiar Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Intercambiar Server:',


    'LBL_MAIL_SMTPUSER' => 'Nombre de usuario SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Contraseña SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Marca',
    'LBL_WIZARD_SYSTEM_DESC' => 'Proporcione el nombre y el logotipo de su organización para marcar su SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Nombre:',
    'SYSTEM_NAME_HELP' => 'Este es el nombre que se muestra en la barra de título de su navegador.',
    'NEW_LOGO' => 'Seleccione Logo:',
    'NEW_LOGO_HELP' => 'El formato del archivo de imagen puede ser .png o .jpg. La altura máxima es de 170 píxeles y el ancho máximo es de 450 píxeles. Cualquier imagen cargada que sea más grande en cualquier dirección se escalará a estas dimensiones máximas.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Subir',
    'CURRENT_LOGO' => 'Logotipo actual:',
    'CURRENT_LOGO_HELP' => 'Este logotipo se muestra en la esquina izquierda del pie de página de la aplicación SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Selección de escenarios',
    'LBL_WIZARD_SCENARIO_DESC' => 'Esto es para permitir la adaptación de los módulos mostrados en función de sus necesidades. Cada uno de los módulos se puede habilitar después de la instalación utilizando la página de administración.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Actualmente no hay escenarios establecidos en el archivo de configuración (config.php)',


    // System Local Settings
    'LBL_LOCALE_TITLE' => 'Configuración regional del sistema',
    'LBL_WIZARD_LOCALE_DESC' => 'Especifique cómo desea que se muestren los datos en SuiteCRM, según su ubicación geográfica. La configuración que proporcione aquí será la configuración predeterminada. Los usuarios podrán configurar sus propias preferencias.',
    'LBL_DATE_FORMAT' => 'Formato de fecha:',
    'LBL_TIME_FORMAT' => 'Formato de tiempo:',
    'LBL_TIMEZONE' => 'Zona horaria:',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_CURRENCY' => 'Moneda:',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo de moneda:',
    'LBL_CURRENCY_ISO4217' => 'Código de moneda ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador 1000s:',
    'LBL_DECIMAL_SEP' => 'Símbolo decimal:',
    'LBL_NAME_FORMAT' => 'Formato de nombre:',
    'UPLOAD_LOGO' => 'Por favor espere, subiendo el logo ...',
    'ERR_UPLOAD_FILETYPE' => 'Tipo de archivo no permitido, por favor cargue un jpeg o png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Se produjo un error de carga de archivo desconocido.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'El archivo cargado excede la directiva upload_max_filesize en php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'El archivo cargado excede la directiva MAX_FILE_SIZE que se especificó en el formulario HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'El archivo cargado solo fue subido parcialmente.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Ningun archivo fue subido.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Falta una carpeta temporal.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Error al escribir el archivo en el disco.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Una extensión de PHP detuvo la carga del archivo. PHP no proporciona una manera de determinar qué extensión causó la detención del archivo.',

    'LBL_INSTALL_PROCESS' => 'Instalar...',

    'LBL_EMAIL_ADDRESS' => 'Dirección de correo electrónico:',
    'ERR_ADMIN_EMAIL' => 'La dirección de correo electrónico del administrador es incorrecta.',
    'ERR_SITE_URL' => 'La URL del sitio es obligatoria.',

    'STAT_CONFIGURATION' => 'Relaciones de configuración ...',
    'STAT_CREATE_DB' => 'Crear base de datos ...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Crear ajustes por defecto ...',
    'STAT_INSTALL_FINISH' => 'Instalar acabado ...',
    'STAT_INSTALL_FINISH_LOGIN' => 'El proceso de instalación finalizó, <a href="%s"> inicie sesión ... </a>',
    'LBL_LICENCE_TOOLTIP' => 'Por favor acepte la licencia primero',

    'LBL_MORE_OPTIONS_TITLE' => 'Mas opciones',
    'LBL_START' => 'COMIENZO',
    'LBL_DB_CONN_ERR' => 'Error de la base de datos',
    'LBL_OLD_PHP' => 'Antigua versión de PHP detectada!',
    'LBL_OLD_PHP_MSG' => 'La versión de PHP recomendada para instalar SuiteCRM es% s <br /> Aunque la versión mínima de PHP requerida es% s, no se recomienda debido a la gran cantidad de errores solucionados, incluidas las correcciones de seguridad, lanzados en las versiones más modernas. <Br / > Estás usando la versión PHP% s, que es EOL: <a href="http://php.net/eol.php"> http://php.net/eol.php </a>. <Br / > Por favor, considera actualizar tu versión de PHP. Instrucciones en <a href="http://php.net/migration70"> http://php.net/migration70 </a>. ',
    'LBL_OLD_PHP_OK' => 'Soy consciente de los riesgos y deseo continuar.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Usuario',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nombre de la base de datos',
    'LBL_DBCONFIG_MSG3' => 'Nombre de la base de datos que contendrá los datos de la instancia de SuiteCRM que está a punto de instalar.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'nombre de host',
    'LBL_DBCONFIG_MSG2' => 'Nombre del servidor web o máquina (host) en el que se encuentra la base de datos (como www.mydomain.com). Si se instala localmente, es mejor usar \'localhost \' que \'127.0.0.1 \', por razones de rendimiento.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '',
    'LBL_DBCONFIG_B_MSG1' => 'El nombre de usuario y la contraseña de un administrador de base de datos que puede crear tablas y usuarios de la base de datos y que pueden escribir en la base de datos es necesario para configurar la base de datos SuiteCRM'
);
