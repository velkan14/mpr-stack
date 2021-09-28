START TRANSACTION;

CREATE TABLE categories (
    id serial PRIMARY KEY,
    category text NOT NULL
);

INSERT INTO categories 
    (category) 
VALUES 
    ("Tool"),
    ("Music"),
    ("Game"),
    ("Social");

COMMIT;