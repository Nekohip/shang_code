CREATE TABLE `students`. (
    `id` INT(10) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(20) NOT NULL COMMENT '姓名' , 
    `mobile` VARCHAR(20) NOT NULL COMMENT '電話' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

--新增
INSERT INTO `students`
    (`name`, `mobile`) 
VALUES 
    ("Amy", "0911"),
    ("Eric", "0922"),
    ("Vincent", "0933");
--修改
UPDATE `students` SET `name` = "Oscar" WHERE `id` = 1;
--刪除
DELETE FROM `students` WHERE `id` = 1;
--查詢
SELECT * FROM `students` WHERE `id` = 2;
