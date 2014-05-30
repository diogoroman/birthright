SELECT patrimonies.id AS "Codigo Interno", patrimonies.orderNum AS "Nº de Patrimonio", patrimonies.bmpNumber AS "Nº BMP", equipment.description AS "Nomenclatura", patrimonies.room AS "Sala", users.name AS "Usuário"
FROM patrimonies, equipment, users
WHERE (patrimonies.section_id = '') AND (equipment.id = patrimonies.equipment_id) AND (users.id = patrimonies.user_id)