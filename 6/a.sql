select 
    tb_cashier.name, 
    tb_product.name, 
    tb_category.name, 
    tb_product.price 
from 
    tb_cashier, 
    tb_product, 
    tb_category 
where 
    tb_product.id_category = tb_category.id 
and 
    tb_product.id_cashier = tb_cashier.id
;