-- Deploy fresh database tables
source docker-entrypoint-initdb.d/tables/categories.sql;
source docker-entrypoint-initdb.d/tables/bundles.sql;