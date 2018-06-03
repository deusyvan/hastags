
ALTER TABLE `blog`.`usuarios` 
ADD COLUMN `caracteristicas` VARCHAR(250) NULL;


UPDATE `blog`.`usuarios` SET `caracteristicas`='Legal, Extrovertido, Brincalhão, Leal' WHERE `id`='1';
UPDATE `blog`.`usuarios` SET `caracteristicas`='Interessante, Bonito, Introvertido, Legal' WHERE `id`='2';
UPDATE `blog`.`usuarios` SET `caracteristicas`='Brincalhão, Legal, Extrovertido' WHERE `id`='3';





