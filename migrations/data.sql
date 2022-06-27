CREATE TABLE IF NOT EXISTS "user" (
    id serial primary key,
    username text,
    email text,
    password text,
    password2 text
);

CREATE TABLE IF NOT EXISTS "task" (
    id serial primary key,
    task text
);
