CREATE TABLE IF NOT EXISTS products(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    grade varchar(255),
    quality varchar(255),
    unit varchar(255),
    sale_rate  varchar(255),
    gst_rate varchar(255),
    remark varchar(255)
)