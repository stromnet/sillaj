USE sillaj;
ALTER TABLE sillaj_event MODIFY COLUMN datUpdate TIMESTAMP NOT NULL;
ALTER TABLE sillaj_project ADD COLUMN datUpdate TIMESTAMP NOT NULL;
ALTER TABLE sillaj_task ADD COLUMN datUpdate TIMESTAMP NOT NULL;
