# Pop
De vez en cuando, usualmente entre las 8 y las 10 de la noche, Mariano se transforma en un escurridizo pulpo de gran tamaño con una larga barba blanca, lo que en Galicia llamamos un pulpo de raza loba.  Por un lado, Mariano está agradecido por no sufrir la típica licantropía de los gallegos. En vez de preocuparse por comerse accidentalmente al paisano de al lado, se preocupa de no terminar en la pota los martes en los que hay feria del pulpo en el pueblo. Tras varias ocasiones en las que se ha despertado aturdido y desnudo entre las rocas de la playa, ha decidido cerrar las puertas de su casa con llave y llenar la bañera con mejillones de la Ría para estar entretenido cuando se transforma.  Pero Mariano está preocupado y quiere solucionar su problema. Sospecha que hay algo que dispara la transformación, ya que no sucede todos los días. Como es un poco nerd, decide enfrentarse al problema de manera científica, registrando en un diario lo que hace cada día y anotando si se transformó o no con unos de sus ocho brazos.  Vamos a ayudarle a construir un programa mediante el cual pueda recoger la información que necesita en una estructura de datos, y luego aplicar un algoritmo para averiguar cuál o cuáles de las cosas que hace (caminar, ver la vuelta, beber vino, etc.) produce que se transforme en pulpo.

# Metodología
  ### Equipo de trabajo
 - Pair-programming
 - Trello
 - GitHub
 - Clockify
 ### Herramientas
 - PHPStorm
 - AWS
 - UbuntuServer
 - EC2
 - Putty
 ### Lenguajes
 - JavaScript
 - PHP
 - HTML
 - CSS

# Tiempo invertido
![Lolo](https://github.com/torrapipes/Pop/blob/master/img/Clockify.png)

# Diagrama de componentes
![Lolo](https://github.com/torrapipes/Pop/blob/master/img/dComponentes.png)


# Interficies Web Documentación
## Índice

**Disposición para diferentes interfaces**

**CSS FlexBox**

**Fuente**

**Color**

**Screens**
#

## Disposición para diferentes interfaces

Toda la web está diseñada con unidades de tamaño rem que permite poder definir ciertos aspectos del layout y adaptarse a las configuraciones del usuario. Por otra parte al no depender del elemento padre su comprensión de uso es más sencilla.  
Se han requerido pocos cambios a nivel de media para ajustarse a los diferentes dispositivos y layouts, ya que la sencillez de la página sumada a la disposición en rem han desembocado en una web responsive casi por sí sola.

| SCREEN | BREAKPOINTS |
| --- | --- |
| Desktop | max-width 1000px |
| Tablet | max-width 800px |
| Móvil  | max-width 450px |


## CSS FlexBox

Todos los elementos ( **resaltados en naranja en las imágenes** ) en el contenido del body (exceptuando header y footer) han sido tratados con FlexBox permitiendo así colocar las cajas principales y las cajas hija contenidas en éstas de manera que se comporten de forma predecible cuando el diseño se acomoda a diferentes dispositivos y layouts.

El único elemento destacable que se ha decidido dejar fuera de la acomodación flexible ha sido el formulario &#39;Login&#39; de la página index.php por la necesidad de dejarlo en una posición adelantada respecto al background y el resto de elementos.

index.php  
![Lolo](https://github.com/torrapipes/Pop/blob/master/img/popIW01.jpg)  
home.php  
![Lolo](https://github.com/torrapipes/Pop/blob/master/img/popIW02.jpg)  
diario.php  
![Lolo](https://github.com/torrapipes/Pop/blob/master/img/popIW03.jpg)  
phi.php  
![Lolo](https://github.com/torrapipes/Pop/blob/master/img/popIW04.jpg)  

## Fuente

Se ha utilizado un único estilo de letra, &#39;Bookman Old Style&#39;, para darle continuidad entre las diferentes estructuras, creando un estilo armonioso y de fácil visualización.

## Color

Con la disposición de color se ha intentado un estilo agradable a la vista y que se comprendiera la conexión entre los diferentes elementos. Destacando los elementos importantes y, a la vez, resaltándolos todos. No se han elegido colores complementarios (armoniosamente opuestos) para centrar la atención en la información contenida en la web y, además, no cansar al usuario con choques de colors.

| Principal | #4D186C |
| --- | --- |
| Fondo | #D4C9D3 | 
| Fondo elementos | #C797DF |
| Shadows | #704070 |
| Fuente destacada | #FFF |



## Screens

**https://drive.google.com/drive/folders/1Yn5e0rhP2oXnxp5eF7eq2uXMFhA7sj8M?usp=sharing**

## Link del documento en drive

**https://docs.google.com/document/d/1asZ31HQj4V38nBzvBChRof2qPJcMyY_TbACVqKVSwK0/edit?usp=sharing**

# Mejoras y dificultades

- Pudimos generar la conexión a la base de datos pero no acceder a ella (AJAX).
- No tuvimos claro los requisitos de cada parte, ya que a pesar de estar especificados los objetivos, el planteamiento de la totalidad del proyecto no estaba concretado. Esto generó un problema en cuanto a la organización del tiempo.
- La división del tiempo no fue apropiada, por nuestra parte, frente a las dificultades que se nos presentaron.
- La estructura de los componentes podría ser más correcta, tanto en divisiones como en nomenclatura.
