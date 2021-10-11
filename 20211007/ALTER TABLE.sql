ALTER TABLE `telephone` ADD 
CONSTRAINT `phone` 
FOREIGN KEY (`utilisateur_id`) 
REFERENCES `utilisateur`(`id`) 
ON DELETE RESTRICT 
ON UPDATE RESTRICT; 


/* il faut que les deux id liés aient le même type (INT ou VARCHAR) */