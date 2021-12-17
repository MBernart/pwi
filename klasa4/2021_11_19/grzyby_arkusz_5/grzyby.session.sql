

SELECT `grzyby`.`nazwa`, `potoczna` 
FROM `grzyby`
JOIN `potrawy`
ON `grzyby`.`potrawy_id` = `potrawy`.`id`
JOIN `rodzina` 
ON  `grzyby`.`rodzina_id` = `rodzina`.`id`
WHERE `potrawy`.`nazwa` = 'sos';