CREATE TABLE movies(
    id       BIGINT AUTO_INCREMENT PRIMARY KEY,
    name     VARCHAR(255) NOT NULL,
    genre    VARCHAR(255) NOT NULL,
    duration INT          NOT NULL
);

CREATE TABLE people(
    id    BIGINT AUTO_INCREMENT PRIMARY KEY,
    name  VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL
);

CREATE TABLE rents(
    id          BIGINT AUTO_INCREMENT PRIMARY KEY,
    person_id   BIGINT NOT NULL,
    movie_id    BIGINT NOT NULL,
    rent_date   DATE   NOT NULL,
    return_date DATE   NULL,
    price       BIGINT NOT NULL,

    FOREIGN KEY (person_id) REFERENCES people(id),
    FOREIGN KEY (movie_id) REFERENCES movies(id)
);