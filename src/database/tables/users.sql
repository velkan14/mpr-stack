START TRANSACTION;

CREATE TABLE users (
    id serial PRIMARY KEY,
    email text NOT NULL,
    pwd text NOT NULL,
);

COMMIT;