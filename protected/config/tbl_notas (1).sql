-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-03-2016 a las 11:19:10
-- Versión del servidor: 5.5.24
-- Versión de PHP: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bagoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notas`
--

CREATE TABLE IF NOT EXISTS `tbl_notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `bajada` text NOT NULL,
  `texto` text NOT NULL,
  `seccion` varchar(50) NOT NULL,
  `pais` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `tbl_notas`
--

INSERT INTO `tbl_notas` (`id`, `fecha`, `titulo`, `bajada`, `texto`, `seccion`, `pais`) VALUES
(1, '2016-02-04', 'Campaña Nacional Antirrábica ', 'Biogénesis Bagó mediante su compromiso y responsabilidad del resguardo de la salud en todas sus dimensiones, cuidado de la ...', 'Biogénesis Bagó mediante su compromiso y responsabilidad del resguardo de la salud en todas sus dimensiones, cuidado de la salud animal y por ende el cuidado de las personas, desde hace más de 20 años participa en las campañas Nacionales de vacunación antirrábica \r\n<br />\r\n\r\nLa importancia de la rabia para la salud pública, tanto en Argentina como en el mundo, radica en la alta letalidad que presenta la enfermedad, aunque el número de casos sea relativamente bajo. <br />\r\nUn caso de rabia humana representa una debilidad en el sistema de salud, debido a las cuantiosas herramientas con que se cuenta para prevenir la enfermedad. Por ello, se deben intensificar las acciones de vigilancia en los ciclos aéreos y terrestres mediante una correcta identificación de los mismos. Así como también se debe aplicar una adecuada estrategia de inmunización en personas y, particularmente, en animales en riesgo, debido a que éstos son la principal fuente de infección para el hombre. <br />\r\nAunque, en los últimos tiempos, se ha logrado en Argentina una reducción importante en casos de rabia, su vigilancia y control sigue teniendo relevancia por la gravedad del evento. Es por eso que, se debe incentivar la investigación científica con el objeto de lograr una constante actualización de la normativa y su difusión. <br />\r\nEl Programa Nacional de Control de Enfermedades Zoonóticas, dependiente de la Subsecretaria de Prevención y Control de Riesgos del Ministerio de Salud de la Nación, es el organismo responsable de llevar adelante las mismas y por ello, Biogénesis Bagó apoya y acompaña con la donación de vacunas para la campaña en curso. ', 'prensa', 'ar'),
(3, '2016-02-01', 'Convocatoria al	Premio Biogénesis Bagó, Versión 2015 a la Innovación en la Producción Bovina. ', 'La Academia Nacional de Agronomía y Veterinaria junto a Biogénesis Bagó SA buscan reconocer ejemplos de esfuerzos ...', 'La Academia Nacional de Agronomía y Veterinaria junto a Biogénesis Bagó SA buscan reconocer ejemplos de esfuerzos profesionales, premiando al mejor trabajo de asesoramiento y adopción de tecnología para incrementar la eficiencia productiva en ganadería intensiva, extensiva y tambos que aborde aspectos sanitarios, reproductivos o de manejo con impacto en la producción bovina realizado en el país. <br />\r\n\r\nLa convocatoria es abierta a profesionales veterinarios o equipos de profesionales en el área agropecuaria que hayan desarrollado actividades de asesoramiento y de adopción de tecnología en los segmentos anteriormente mencionados y cuyo trabajo sea verificable y este adecuadamente documentado. <br />\r\nEl Premio a la innovación para una mayor eficiencia productiva consistirá en un Diploma y la suma de $ 40.000 pesos que serán entregados en el acto de presentación de dicho Premio en la sede de la ANAV, en la fecha que oportunamente fijarán los organizadores de la presente Convocatoria a su sólo criterio. <br />\r\nEl cierre de la convocatoria será el 12 de mayo de 2016 y la entrega del Premio se realizará en el mes de julio del año 2016. <br />\r\nLos Términos y Condiciones Generales de la convocatoria se pueden consultar en la página web de la Academia www.anav.org.ar	sección Novedades. \r\n', 'prensa', 'ar'),
(5, '2015-10-08', 'Biogénesis Bagó recibió un reconocimiento a la trayectoria y excelencia empresarial.', 'El pasado 31 de Julio, en el marco de la 129° Exposición Rural de Palermo, Clarín Rural entregó el Premio Testimonios al ...', 'El pasado 31 de Julio, en el marco de la 129° Exposición Rural de Palermo, Clarín Rural entregó el Premio Testimonios al Desarrollo Empresarial a Guillermo Mattioli, Director General de Biogénesis Bagó, por haber convertido a la empresa en líder de la industria veterinaria y actor clave en el control de las principales enfermedades de los rodeos argentinos, en especial la Fiebre Aftosa. <br />\r\n\r\n“Agradezco el reconocimiento y lo comparto con toda la empresa, en especial con dos veterinarios, Alejandro Gil y Rodolfo Bellinzoni, con quienes hemos trabajado codo a codo para llevar a Biogénesis Bagó a ser un aliado estratégico del productor y de los asesores en el camino a alcanzar la máxima productividad de los rodeos, o sea la Frontera Productiva”, comentó el Ingeniero Mattioli, al agradecer el premio. <br />\r\n\r\nLos Premios Testimonios, son un clásico del Diario Clarín Rural, que reconocen la labor y trayectoria de personas y empresas estratégicas del sector agroindustrial argentino, que muestran la fortaleza y potencial que tiene el campo. Los mismos, son entregados por autoridades del Grupo Clarín, del diario y sus periodistas. <br />\r\n\r\nLos premiados fueron: \r\nJuan Elizalde (Desarrollo en Ganadería) \r\nAlfredo Guarino (Periodismo Agropecuario) <br />\r\nGuillermo Mattioli (Desarrollo Empresarial) <br />\r\nFrancisco Garcia Mansilla (Trayectoria en Agricultura) <br />\r\nCarlos de Dios (Desarrollo en Agricultura) <br />\r\nElvio Colombo (Trayectoria Empresarial) \r\nSusana Solá (Investigación en Agricultura) <br />\r\nRosgan (Innovación Ganadera) <br />\r\nCarlos Enrique Zeni (Trayectoria Empresarial) <br />\r\nMartin Bonadeo (Desarrollo en Maquinaria) <br />\r\nMiguel Ezcurra (Desarrollo en Tecnología) \r\n', 'prensa', 'ar'),
(7, '2015-10-08', 'Alcanzar la Frontera Productiva es posible ', 'La Argentina, como país tradicionalmente productor de carne y leche de alta calidad percibida y demandada; y con un potencial ...', 'La Argentina, como país tradicionalmente productor de carne y leche de alta calidad percibida y demandada; y con un potencial de producción elevado gracias a los recursos naturales (suelo, agua y clima) y la tecnología (genética, productos sanitarios, insumos, maquinaria, etc.) disponibles se enfrenta al desafío de eficientizar su producción y producir más con los mismos recursos (alcanzar la Frontera productiva) para satisfacer una demanda mundial de proteína animal creciente. <br />\r\n\r\n\r\nRespaldo de los profesionales dispuestos a brindarle asesoramiento y la mejor tecnología disponible y a muy bajo costo. Teniendo todo a su alcance:<br /> \r\n¿Por qué no se alcanzan los máximos índices productivos de los rodeos?<br />\r\n¿Cómo se puede estimular, desde las áreas de referencia, a que ésto suceda?<br /> \r\nDesde Biogénesis Bagó, creamos un espacio de reflexión y debate para que todos los que formamos la cadena productiva de carne y leche, busquemos las respuestas a estas dos preguntas, de forma sencilla y con planes de acción dirigidos a todos los productores que quieran producir más con los mismos recursos. <br />\r\nAlgunos datos a tener en cuenta \r\nOportunidades a nivel de la demanda mundial: <br />\r\nLa producción mundial de carnes deberá aumentar un 70% hacia el 2050. \r\nAmérica Latina concentra el rodeo productivo más grande del mundo. <br />\r\nSituación actual de la producción ganadera nacional: <br />\r\nSólo el 12% hace tacto rectal <br />\r\nSólo el 17% de los servicios son estacionados. <br />\r\nSólo el 30% de los establecimientos tienen asesoramiento veterinario. <br />\r\nSe utiliza el 50% de los productos que se deberían utilizar de un plan sanitario completo. <br />\r\nSólo se utiliza entre el 25 y 30% de las dosis de vacunas reproductivas, a pesar que el 50% de las fallas reproductivas, que se pueden prevenir con el uso de vacunas de calidad, se deben a causas infecciosas (fuente: INTA). <br />\r\nCada año en Argentina se pierden $18,4 millones por falta de inversión en sanidad (fuente: Caprove). <br />\r\nLa incidencia de la inversión en sanidad es solamente del 2 al 5% de los costos totales de la explotación ganadera.<br /> \r\nEl costo de un plan sanitario completo por vientre entorado es de $230 o el equivalente a 10 kg de ternero –incluyendo productos y asesoramiento veterinario–. <br />\r\nÍndices productivos promedio: \r\no	Preñez: 75% (es posible llegar a 95%) <br />\r\no	Destete: 63% (es posible llegar a 90%) <br />\r\no	Extracción: 30% (es posible llegar a 40%) <br />\r\nAlgunos beneficios de la implementación de un plan sanitario con asesoramiento veterinario.<br />\r\nCada 100 vacas entoradas, invirtiendo 140kg de ternero en sanidad, se evita la pérdida de 1800 kg de carne. Relación costo/beneficio: 1:13. <br />\r\nCon una inversión de 1 kg de carne por vaquillona preñada (vacuna de diarrea neonatal) se evita la perdida de aproximadamente 8 a 10 kg de carne. <br />\r\nSólo pasar del 63% al 73% de destete significan 2.8 millones más de terneros.<br /> \r\nResumiendo <br />\r\nLa aplicación de un plan sanitario con asesoramiento veterinario es la inversión más baja y con mayor impacto en los resultados, dentro de un planteo productivo. ', 'prensa', 'ar'),
(9, '2015-10-08', 'Biogénesis Bagó realizó el evento “Alcanzar la Frontera Productiva es posible” presentando casos de éxito de nuestra ganadería ', 'La Rural – Palermo. El viernes 24 de julio Biogénesis Bagó llevó a cabo el evento “Alcanzar la Frontera Productiva es ...', 'La Rural – Palermo. El viernes 24 de julio Biogénesis Bagó llevó a cabo el evento “Alcanzar la Frontera Productiva es posible” del que participaron más de 400 personas, entre productores, veterinarios, asesores, representantes de asociaciones del sector, de cámaras y empresas pecuarias, representantes de los medios de comunicación y público en general. <br />\r\n\r\nLa jornada comenzó con la presentación de Matías Nardello, Director de Marketing Regional de Biogénesis Bagó quien hizo un resumen de las tendencias mundiales y del potencial de mercado de carne y leche de la Argentina, asegurando que “Necesitamos seguir creciendo, pero hacerlo sobre el stock es caro. Por lo tanto tenemos que crecer sobre el rodeo existente, porque hay muchos rodeos rezagados. La propuesta de Biogénesis Bagó es crecer haciendo más eficiente el recurso “vaca”, achicando las brechas que separan la producción actual de la Frontera Productiva, definiendo que la frontera productiva es el máximo potencial productivo que puede alcanzar un rodeo”.  <br />\r\nMatías Nardello también comentó que “de los 4 pilares tecnológicos para reducir la brecha hacia la Frontera Productiva –nutrición, genética, manejo y sanidad– es ésta última la herramienta de menor inversión (entre los costos totales de producción) y que, sumada al asesoramiento veterinario, mayor impacto genera. Por poner un solo ejemplo, si pasara del destete promedio actual de 63% tan sólo 10 puntos, o sea al 73%, se obtendrían 1.400.000 terneros más al año”.  <br />\r\nNardello también destacó el rol del Asesor Veterinario, como “gerente sanitario que diseña las estrategias para crear y mantener el estatus inmunitario de los rodeos y que agrega valor al confeccionar un Plan Sanitario que incluye prevención y diagnóstico de enfermedades, asegurando la inversión sanitaria”.  <br />\r\nLuego, el Director de Marketing del laboratorio invitó a exponer a productores y sus veterinarios de diferentes zonas del país y diferentes tipos de producciones pecuarias. Todos ejemplos de que alcanzar la frontera productiva es posible.  <br />\r\nLa primera dupla en exponer su caso fue la integrada por el Ingeniero en Producción Agropecuaria Rodolfo Nougues, dueño y administrador general de campos de cría en la Cuenca del salado y su Veterinario Asesor Juan Insaugarat, socio de Veterinaria “El Rodeo” en Saladillo.  <br />\r\nRodolfo Nougues, cuya producción está hecha en su totalidad sobre campos arrendados, destacó que empezó a notar la diferencia productiva luego de un curso de especialización en negocios que hizo: “luego de ese curso comenzamos a aplicar el planeamiento estratégico en la empresa, basados en que ésa era una variable que podíamos controlar (a diferencia de muchas otras variables que en el campo no se pueden controlar).  <br /> \r\nComenzamos así un rediseño de la producción agrícola ganadera para hacerlas complementarias y generar sinergias. En éste sentido diría que un punto clave para nosotros es la capacitación continua, no solo la nuestra, como gerenciadores, sino la de todo el personal del establecimiento”. Rolo Nougues también destacó que “otro factor clave fueron las alianzas estratégicas que hicimos con empresas proveedoras y otros prestadores de servicios, como fue el caso de Biogénesis Bagó y el caso de nuestro Asesor Veterinario: de hecho, una meta que nos pusimos con Juan Insaugarat, y que hemos logrado con éxito, que es el entore de 15 meses, con altos índices de preñez”.  <br />\r\nJuan Insaugarat, Médico veterinario, por su parte aseguró que, fruto de esta alianza estratégica “armamos un Plan Sanitario que acompañara el crecimiento de la empresa y que generara más vacas, más productividad, en base a los diagnósticos del establecimiento y apuntando a la prevención para gerenciar la sanidad, porque la clave para ajustar un plan sanitario es saber quién es el enemigo… para lo cual hubo que capacitar a todos los empleados del campo”. Insaugarat aseguró que “una sanidad asesorada es de alto impacto y bajo costo, pero los resultados requieren tiempo y que la clave es la capacitación y hacer las cosas con muchas ganas”. \r\nPosteriormente presentaron su ejemplo Raúl Blua, Socio de Agropecuaria Blua Hermanos, productores de cría Bovina Intensiva en zona Centro - Establecimiento El Casco y Martín Correa Luna, Médico Veterinario, perteneciente al INTA Venado Tuerto y Director del programa Cría Bovina Intensiva.  <br />\r\nBlua aseguró que “Cría intensiva no es largar las vacas con un toro… nosotros estamos en un 6.4 vacas por hectárea. Trabajamos sobre la utilización inteligente de los rastrojos y con la idea de que la rotación entre agricultura y ganadería hace más sustentable todo el sistema. Pero sobre todo ponemos mucha dedicación y pasión por la ganadería”.  <br />\r\nEl veterinario Martín Correa Luna, por su parte, contó la experiencia del Programa de Cría Bovina Intensiva y sus aprendizajes y aseguró que “en orden de importancia es más rentable obtener más terneros/ha que lograr más peso al destete o mejor precio a la venta, y para ello a mayor intensificación, mayor necesidad de asesoramiento veterinario”. También destacó la importancia de la simulación de carga para medir la curva de eficiencia de uso de los recursos forrajeros.  <br />\r\nPor su parte, Juan Baqué, Médico Veterinario y Gerente General de Ganagrin, empresa agrícola ganadera presentó el caso de la Estancia Santa Irene, de Producción de cría en el NEA junto con Jorge Pastori, Mayordomo de la estancia.  <br />\r\nMás allá de las cuestiones productivas propiamente dichas, tales como “la idea de identificar los puntos críticos de la cría y pasar del círculo vicioso al círculo virtuoso”, Juan Baqué apuntó al “armado del equipo de trabajo como un punto crítico y al liderazgo para llevar a cabo el proyecto”. <br /> \r\nPastori, por parte, explicó la estrategia de trabajo que utilizan para aprovechar el medio ambiente sustentablemente (pulmón) y destacó que “nosotros logramos el 100% de entore a los 18 meses, lo cual es complejo en nuestra zona. Creemos que para hacer sustentable a un sistema de ciclo completo la cría debe ser exitosa, entendiéndola como una actividad con costo hundido donde el índice de preñez es el punto de partida del ciclo productivo”.  <br />\r\nPor último el Lic. Cristian Chiavassa, Director del Grupo Chiavassa, expuso su caso de éxito, basado en la producción intensiva en tambo con alta implementación de tecnología. Un punto interesante que mostró este caso fue el recambio generacional, dado que la implementación tecnológica fue instrumentada por Cristian y sus hermanos, cuando ingresaron a la empresa familiar.  <br />\r\n“Para crecer hay que pasar de la intuición a la gestión”, arrancó Cristian Chiavassa, quién comentó que una de las primeras iniciativas que tomaron él y sus hermanos fue comenzar a medir la producción para poder comparar y así tomar decisiones estratégicas de negocios, basadas en tener claro que áreas tenían que mejorar. “Actualmente hemos mejorado tanto el sistema de gestión al punto que tomamos las decisiones basados en mediciones en tiempo real. Hacemos costeo del litro de leche de manera mensual para evaluar rentabilidad del sistema y hemos involucrado al personal en el manejo del tablero del control y en el logro de objetivos, lo cual requirió de capacitación y de acciones de RRHH”.  <br />Respecto a la tecnología incorporada a la empresa, que fue mucha y muy innovadora en pocos años, aseguró que “para la incorporación de tecnología hay que analizar el repago y no el costo”. “A nosotros nos ha dado un enorme resultado”, concluyó.  <br />\r\nLuego de estos casos de éxito, fue el turno del panel integrado por representantes de los grupos de referencia, que fuera moderado por Héctor Huergo, Editor del Clarín Rural y del que participaron: Horacio Salaverri, Presidente de CARBAP; Martin Goldstein, Director de Prensa y Medios SRA; Ignacio Iriarte, Director de Informe Ganadero; Esteban Turic, Director de Innovación de Biogénesis Bagó; Miguel Mejía, asesor veterinario y Alberto Franichevich, Profesor del área de Dirección de Personas y comportamiento humano IAE.  <br />\r\nLas conclusiones más importantes de éste bloque podrían resumirse en que:  <br />\r\n•	La tecnología está disponible y es de fácil acceso para todos los productores.  <br />\r\n•	Hay un desbalance en el paquete tecnológico aplicado. Se usa más la terapéutica que la prevención, que queda evidenciado en el bajo nivel de aplicación de vacunas a nivel país.  <br />\r\n•	La capacitación parece ser clave a la hora de dar el salto cuantitativo. \r\n•	La importancia de hacer más competitivo el ámbito rural para evitar que la gente se vaya del campo a la ciudad (se mencionaron especialmente 3 áreas: transitabilidad – caminos, electricidad y eonectividad como áreas clave a desarrollar).  <br />\r\n•	La necesidad de empezar a medir más para poder evaluar y planificar estrategias.  <br />\r\n•	La oportunidad: con optimismo, ganas y apalancado en que otros están pudiendo hacerlo.  <br />\r\n•	Entender que siempre el cambio genera resistencias, pero ver modelos positivos es muy constructivo. <br /> \r\n•	La idea de premiar a los que ya lo están logrando, para promover ejemplos positivos que ayuden a cambiar la cultura y mostrar que se puede.  <br />\r\n•	La propuesta de trabajar en forma colaborativa (y no transaccional), con una visión clara de hacia dónde ir: alcanzar la Frontera Productiva. <br /> \r\nPor último, el bloque final, del que participó, además de Héctor Huergo, Félix Sammartino, Prosecretario de Redacción del Suplemento Campo de La Nación, buscó resumir y llevar el mensaje de la importancia de la comunicación para empezar a transitar el camino hacia una mayor productividad.  <br />\r\nEn este sentido, se comentó que el concepto de Frontera era muy valioso porque implicaba que “cada frontera puede superarse” y que “cada uno tiene su propia frontera”, algo fundamental de cara a la propuesta presentada por Biogénesis Bagó, que invita a que cada productor, junto a su asesor veterinario, midiendo y conociendo su situación productiva actual y con foco en metas a las que han llegado algunos establecimientos ganaderos modelo, definan sus propios objetivos y concreten su planificación estratégica para iniciar el camino hacia la Frontera Productiva. ', 'prensa', 'ar'),
(11, '2015-10-08', 'Biogénesis Bagó presentó en Corrientes su Programa Estratégico para el control de la Garrapata (PEGA) ', 'Del evento realizado en Corrientes participaron autoridades oficiales, representantes de los productores ganaderos y también ...', 'Del evento realizado en Corrientes participaron autoridades oficiales, representantes de los productores ganaderos y también de la profesión veterinaria. Se propuso la aplicación de un plan sanitario integral. <br />\r\n\r\n\r\nCon el objetivo de ofrecer una estrategia integral que permita a los rodeos bovinos del NOA y el NEA expresar su máximo potencial posible, Biogénesis Bagó presentó el pasado 16 de septiembre su Programa Estratégico para el Control de la Garrapata (PEGA) en la provincia de Corrientes. <br />\r\nDel encuentro participaron más de 250 personas, entre las cuales se encontraron representantes del Senasa y del INTA, así como también de otras instituciones que agrupan a los productores y un importante número de asesores veterinarios de distintas regiones. <br />\r\n“Esta acción se enmarca en el Plan Fronteras Productivas que lanzamos hace unos meses y nos permite hablar no sólo de un producto, sino de la importancia de ofrecer planes sanitarios completos para que, bajo el asesoramiento de un veterinario, los productores logren mitigar las pérdidas que ocasiona la garrapata en la producción de la zona”, sostuvo Nicolás Luciani, gerente de Ventas de Biogénesis Bagó. <br />\r\nEn este sentido, el médico veterinario Sebastián Crudeli destacó que con la implementación del PEGA “se podrá bajar la carga de garrapatas de los campos y en los animales, evitando la aparición de resistencia a principios activos y alcanzando una mayor productividad de los rodeos”. <br />\r\nAdemás, el representante técnico de Biogénesis Bagó dejó en claro que se trata de un programa por el cual se pone a disposición de los productores una serie de herramientas que permiten mejorar la conversión de alimentos, a la vez de incrementar los índices reproductivos de los animales, la producción de leche y el estado sanitario general de los rodeos. \r\n“En definitiva, proponemos un mix de tecnologías que posibilitarán alcanzar un mayor número de terneros (más pesados) por vientre y favorecer la disminución de casos de tristeza bovina en los campos”, agregó Crudeli. \r\nEn la misma línea, Jesús Pesoa -gerente de Innovación del laboratorio - mencionó que con el lanzamiento de productos como Aspersin, Forbox y la Bagomectina Star, Biogénesis Bagó completa su portfolio de principios activos y métodos de aplicación para avanzar en la lucha contra la garrapata. “Esto nos permite ser flexibles y eficaces a la hora de pensar en programas estratégicos para diferentes regiones, establecimientos y circunstancias”, explicó el médico veterinario. Y agregó: “Teniendo en cuenta que esta problemática afecta a unas 10 millones de cabezas en la región, es que seguiremos llevando adelante jornadas y capacitaciones en diferentes lugares de Corrientes, pero también de Chaco y el norte de Santa Fe. \r\n<br />\r\n“Lo más económico es erradicar la garrapata” <br />\r\nEn el lanzamiento del PEGA también estuvo presente el consultor privado Abel Vogel quien expuso estrategias concretas para avanzar en la lucha contra la garrapata, cuidando la vida útil de los principios activos disponibles. <br />\r\n\r\n“Hoy estamos en niveles altos de parasitación tanto en el NOA, como en el NEA, donde –por cuestiones climáticas- se completarán cuatro generaciones de garrapatas (una más de lo habitual)”, explicó el profesional. Y enfatizó: <br />“Esto significa que si no realizamos los controles y tratamientos necesarios, vamos a tener graves problemas a campo”.<br /> \r\nEn este sentido, Vogel fue contundente en cuanto al modo en que la región debe trabajar en el corto y mediano plazo: “Ya no podemos depender exclusivamente de la estructura del Senasa; se hace imprescindible un cambio de mentalidad tanto por parte del ganadero, como de su corresponsable sanitario, quienes muchas veces relativizan las pérdidas que ocasiona la garrapata, hasta que comienzan a ver mortandades por Tristeza Bovina”. <br />\r\nAdemás, el disertante dejó en claro que se debe comenzar a hablar de “campos enfermos” y ya no más de “animales con ectoparasitosis”. En cuanto a este cambio de paradigma, Vogel amplió la importancia de que los veterinarios tomen real conciencia de la necesidad de erradicar la garrapata de sus campos. “Nos hemos acostumbrado a convivir con el problema”, sostuvo. <br />\r\nClaro que para lograr estos objetivos, el médico veterinario presentó una serie de estrategias, destacando que la primera decisión que debe tomar el ganadero es si quiere erradicar o convivir con la garrapata. <br />\r\n“Si bien en lo personal siempre he creído que es más rentable la primera de las alternativas, existen hoy herramientas para concretar exitosamente las dos posibilidades”, sostuvo el referente. Y ejemplificó: <br />“Tradicionalmente, la garrapata se trató por medio de baños de inmersión hacia los cuales debíamos llevar los animales; mientras que hoy con los inyectables y los pour on, también podemos trasladar los productos al bovino. No tenemos excusas para no completar los tratamientos y esto es imprescindible para no seguir fomentando resistencia a los principios activos”.<br /> \r\nCulminando su disertación, Abel Vogel respondió una serie de preguntas y concluyó: “Es más económico erradicar la garrapata que convivir con ella. Se puede y debemos hacerlo”. ', 'prensa', 'ar'),
(13, '2016-01-02', 'Nuestra definición y significado de RSE o sustentabilidad ', 'Consideramos que el valor social que aporta nuestra compañía, ha sido fundamental en situaciones en que nuestro país ha ...', 'Consideramos que el valor social que aporta nuestra compañía, ha sido fundamental en situaciones en que nuestro país ha estado en riesgo sanitario.<br />\r\n\r\nEntendemos la sustentabilidad como algo integrado al negocio. <br />\r\n\r\nNuestros pilares de RSE se basan: <br />\r\n\r\nLa principal tarea es la organización de nuestros eventos Biosolidarios que contribuyen a lograr objetivos concretos con instituciones no solo de Argentina, sino de Uruguay y Paraguay. Desde el año 2002 llevamos realizados 24 encuentros, con más de 1.500.000 de dólares recaudados. <br />\r\n\r\n* Salud: Trabajamos en alianza con 3 fundaciones referentes en salud humana y animal. Fundación Mundo Sano, Prosaia y el Hospital Fernández. <br />\r\n\r\n* Educación: Colaboramos con la educación de nuestro país, acompañando el desarrollo de las comunidades rurales en alianza con Misiones Rurales y a través de los Encuentros Biosolidarios y campañas específicas en las que involucramos a nuestros colaboradores (como la campaña cuadernos). <br />\r\n\r\n* Desarrollo humano y de la comunidad: Trabajamos con las comunidades cercanas a las plantas para generar vínculos estables y duraderos que permitan su desarrollo, especialmente en escuelas y comedores locales. <br />\r\n\r\n* Medio Ambiente: Trabajamos en reducir consumos, reciclando y reutilizando el agua, teniendo plantas certificadas con ISO 9001, 14.001, BPM (Buenas Prácticas de Manufactura) y gestionando el uso del packaging de nuestros productos. ', 'rse', 'ar'),
(15, '2012-11-12', 'Encuentro Biosolidario Tandil x Tandil', 'Biosolidario N° 24 Tandil x Tandil', '\r\n\r\nGracias al esfuerzo de todos los “Socios Biosolidarios” que nos unimos el día 22 de noviembre de 2012 en el Salón de la Cámara de Comercio, hoy podemos decir que el objetivo se cumplió y usted lo hizo posible.\r\n<br>\r\n<br>Una vez más podemos afirmar que el trabajo en equipo de personas, empresas y entidades públicas y privadas, con un objetivo claro,  buena voluntad, el deseo de un país mejor y el manejo eficiente de recursos, es clave para el desarrollo y progreso de la comunidad.\r\n<br>\r\n<br>Como organizadores nos sentimos orgullosos de poder compartir nuestros logros con gente solidaria como usted y estamos seguros y reafirmamos que JUNTOS PODEMOS MÁS.\r\n<br>Objetivo: compra de un tomógrafo de última generación para el Hospital de Niños Dr Debiglio Blanco Villegas y el hospital Ramón Santamarina.\r\n<br>Recaudación: 1.300.000 pesos', 'rse', 'ar'),
(17, '2010-11-13', 'Encuentro Biosolidario del Bicentenario ', '', '\r\n\r\n<b>Lugar: </b>Ciudad autónoma de Buenos Aires. \r\n<br><b>Entidad beneficiaria:</b> Misiones Rurales Argentinas (MiRA) y Pilar Solidario \r\n<br><b>Objetivo:</b> ayudar a más de 600 escuelas y más de 45.000 personas, entre niños, jóvenes y adultos de todo el país. \r\n<br><b>Monto recaudado:</b> U$D 191.529 \r\n<br><b>Materialización del objetivo:</b> los fondos fueron usados para permitir la continuidad de los proyectos durante el 2011. En las 600 escuelas que apadrina MiRA. y contribuir con las obras de Pilar Solidario.', 'rse', 'ar'),
(19, '2009-10-09', 'Encuentro Biosolidario: Paraguay x Paraguay y su gente ', '', '\r\n\r\nLugar: Asunción, Paraguay.\r\n<br>Entidad beneficiaria: Fundación Casa Cuna Dr. Carlos Santiviago y  Fundación Pa`í Pukú\r\n<br>Objetivo: Casa Cuna: El objetivo será  la construcción de un Salón de Usos Múltiples, dos baños y una cocina; contribuyendo con esta mejora, dar albergue a 100  más. \r\n<br>Fundación Pa’ I Pukú  será la ampliación de su actual  panadería, que permitirá autoabastecerse y el excedente podrán venderlo para tener un ingreso más para la Fundación.\r\n<br>Monto recaudado: U$D 67.564\r\n<br>Materialización del objetivo: El 27 de Septiembre de 2010 se llevó a cabo la inauguración de la 4º sede de Casa Cuna Dr. Santiviago, logrando de esta manera dar contención a 50 nuevos niños asistencia con "Casa de día" a niños de 6 meses a 5 años. Fundación Pa`I Pukú, alcanzó su objetivo de la compra de termo tanques, ampliación de su actual panadería y compra de nueva maquinaria para la misma. Lo cual permite a los 600 niños que viven en esa comunidad tener una nueva fuente de ingresos.\r\n<br>', 'rse', 'ar'),
(21, '2009-07-04', 'Encuentro Biosolidario Salta x Salta ', '', '\r\nLugar: Salta, Salta.\r\n<br>Entidad beneficiaria: Hospital de Rosario de la Frontera; Hospital de Las Lajitas, La Casa del Niño de Salta y la Escuela Especial de Metán, anexo el Galpón.\r\n<br>Objetivo: a total beneficio de la Escuela de Educación Especial Evita  Nº7049 de Metán, anexo El Galpón; el Hospital Melchora Figueroa de Cornejo de Rosario de la Frontera;  la Casa del Niño en la ciudad de Salta y el Hospital Esperanza Burgos de Aguirre de Las Lajitas\r\n<br>Monto recaudado: U$D 52.492\r\n<br>Materialización del objetivo: Con lo recaudado en el mes de septiembre se hizo efectiva la entrega de: 2 autoclaves para el Hospital de Las Lajitas, Una lavadora y secadora industrial para La Casa del Niño; Equipamiento para la Escuela, y dinero aportado para la compra de un aparato de Hemodinamia para el Hospital de Rosario de la Frontera.\r\n<br>', 'rse', 'ar'),
(23, '2008-11-14', '5º Encuentro Biosolidario de Uruguay ', '', 'Lugar: Uruguay \r\nEntidad beneficiaria: Centro Despertar del Departamento de Lavalleja, que atiende a una cantidad importante de niños y jóvenes con capacidades diferentes. \r\nObjetivo: Comprar por lo menos un terreno para construir en Centro Despertar propio. \r\nMonto recaudado: U$D 42.527 \r\nMaterialización del objetivo: Lo recaudado les permitió acceder a una sede propia (en 2009), además de poder atender a un mayor número de chicos. ', 'rse', 'ar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
