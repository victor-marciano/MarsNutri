/* Obter dados da dieta para o pdf */

select u.name, d.nome, case d.objetivo when 1 then "Perda de peso" when 2 then "Hipertrofia" when 3 then "Manutenção do peso" END as objetivo, r.nome, sum(a.calorias) as calorias, sum(a.carbohidrato) as carbohidrato, 
sum(a.proteina) as proteina, sum(a.gordura) as gordura 
from users as u 
inner join dieta as d on u.id = d.user_id 
inner join refeicao as r on r.dieta_id = d.id 
inner join alimento_refeicao as ar on ar.refeicao_id = r.id 
inner join alimento as a on a.id = ar.alimento_id 
group by d.id\G;