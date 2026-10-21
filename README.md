# Usando-a-la-IA-como-profesor
Crea un prompt del estilo "Comportate como un profesor experto en PHP con más de 15 años de experiencia y dame ejercicios para aprender a programar en PHP, ya se hacer bucles y condicionales y me manejo con las variables, pasame al siguiente nivel con ejercicios sencillos para el aprendizaje"

erfecto. Si ya controlas variables, if, switch, for, while y do-while, el siguiente paso no es aprender más sintaxis, sino empezar a resolver problemas reales y organizar código.
 
Te propongo una ruta de ejercicios tipo videojuego: cada uno introduce una habilidad nueva sin ser demasiado difícil. Las estimaciones están pensadas para alguien que dice que "se le da mal programar", trabajando sin copiar soluciones.
 
Nivel 1: Arrays (tablas de datos)
Ejercicio 1: Estadísticas de notas
 
Tiempo estimado: 20-40 minutos
 
Crea un array con 10 notas.
 
Ejemplo:
 
PHP
$notas = [5, 7, 3, 9, 10, 6, 8, 4, 2, 7];
 
Muestra:
 
Nota más alta
Nota más baja
Promedio
Cuántos aprobados hay
Aprenderás
Recorrer arrays
Comparar valores
Acumular resultados
Ejercicio 2: Buscar un número
 
Tiempo estimado: 15-30 minutos
 
Pide un número al usuario.
 
Comprueba si existe dentro de un array.
 
Si existe:
 
Plain Text
El número está en la posición X
 
Si no existe:
 
Plain Text
No encontrado
Aprenderás
Arrays
Búsquedas
Bucles
Nivel 2: Funciones
Ejercicio 3: Calculadora de áreas
 
Tiempo estimado: 30-60 minutos
 
Crea funciones:
 
PHP
areaCuadrado()
areaRectangulo()
areaCirculo()
 
El usuario elegirá qué cálculo quiere hacer.
 
Aprenderás
Crear funciones
Parámetros
Devolver valores con return
Ejercicio 4: Validador de contraseñas
 
Tiempo estimado: 30-45 minutos
 
Haz una función que reciba una contraseña.
 
Será válida si:
 
Tiene al menos 8 caracteres
Tiene un número
Tiene una letra mayúscula
 
Mostrar:
 
Plain Text
Contraseña válida
 
o
 
Plain Text
Contraseña inválida
Aprenderás
Funciones
Cadenas de texto
Validación
Nivel 3: Arrays asociativos
Ejercicio 5: Agenda telefónica
 
Tiempo estimado: 45-90 minutos
 
Crear un array asociativo:
 
PHP
$agenda = [
"Juan" => "600111111",
"Ana" => "600222222",
"Luis" => "600333333"
];
 
Menú:
 
Plain Text
1. Buscar contacto
2. Mostrar todos
3. Añadir contacto
4. Salir
Aprenderás
Arrays asociativos
Menús
Gestión de datos
Ejercicio 6: Tienda básica
 
Tiempo estimado: 1-2 horas
 
Productos:
 
PHP
$productos = [
"Teclado" => 20,
"Ratón" => 15,
"Monitor" => 150
];
 
El usuario puede:
 
Ver productos
Comprar
Ver total acumulado
Aprenderás
Arrays asociativos
Variables acumuladoras
Menús complejos
Nivel 4: Manipulación de cadenas
Ejercicio 7: Analizador de frases
 
Tiempo estimado: 30-60 minutos
 
Pide una frase y muestra:
 
Número de caracteres
Número de palabras
Cuántas vocales tiene
Cuántas veces aparece la letra "a"
 
Ejemplo:
 
Plain Text
Introduce una frase:
Hola mundo
 
Caracteres: 10
Palabras: 2
Vocales: 4
A: 1
Aprenderás
Strings
Bucles sobre texto
Funciones de PHP
Nivel 5: Proyecto pequeño
Ejercicio 8: Cajero automático
 
Tiempo estimado: 1-3 horas
 
Saldo inicial:
 
PHP
$saldo = 1000;
 
Menú:
 
Plain Text
1. Consultar saldo
2. Ingresar dinero
3. Retirar dinero
4. Salir
 
Impedir:
 
Retirar saldo negativo
Retirar más dinero del disponible
Aprenderás
Menús grandes
Validaciones
Organización del programa
Nivel 6: Ficheros
Ejercicio 9: Bloc de notas
 
Tiempo estimado: 1-2 horas
 
Menú:
 
Plain Text
1. Escribir nota
2. Ver notas
3. Borrar notas
4. Salir
 
Guardar todo en un fichero:
 
Plain Text
notas.txt
Aprenderás
fopen
fwrite
file_get_contents
 
Esta es una habilidad muy útil porque ya empiezas a hacer programas persistentes.
 
Nivel 7: Proyecto final de principiante
Ejercicio 10: Gestor de alumnos
 
Tiempo estimado: 3-6 horas
 
Cada alumno tendrá:
 
PHP
Nombre
Edad
Nota
 
Menú:
 
Plain Text
1. Añadir alumno
2. Mostrar alumnos
3. Buscar alumno
4. Mostrar aprobados
5. Nota media
6. Salir
 
Guarda la información en arrays.
 
Aprenderás
Arrays multidimensionales
Funciones
Menús grandes
Organización de programas
Progresión aproximada
 
Si haces los 10 ejercicios tú solo:
 
Ejercicios 1-4 → 1 semana
Ejercicios 5-8 → 1-2 semanas
Ejercicios 9-10 → 1 semana
 
En unas 3-4 semanas practicando 30-60 minutos al día pasarías de "sé hacer bucles y condicionales" a "puedo hacer aplicaciones pequeñas en PHP por mi cuenta".
 
Mi recomendación es que empieces por el Ejercicio 5 (Agenda telefónica). Es el punto donde mucha gente deja de escribir código suelto y empieza a crear programas completos con menús, búsquedas y almacenamiento en memoria. Ahí se nota un salto grande de nivel.
