START TRANSACTION;

CREATE TABLE bundles (
    id serial PRIMARY KEY,
    name text NOT NULL,
    bundle text NOT NULL,
    company text NOT NULL,
    email text NOT NULL,
    active boolean NOT NULL,
    category integer REFERENCES categories (id)
);

COMMIT;