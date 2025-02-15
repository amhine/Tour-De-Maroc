-- SQL Code definir la schema de base de données
-- CREATE DATABASE tourmaroc
-- \c tourmaroc;
CREATE TYPE status AS ENUM('active', 'inactive');
CREATE TYPE roles AS ENUM ('admin', 'cycliste', 'fan');
CREATE TABLE Role (
    role_id SERIAL,
    role_name roles NOT NULL,
    PRIMARY KEY (role_id)
    role_id SERIAL,
    role_name roles NOT NULL,
    PRIMARY KEY (role_id)
);
CREATE TABLE Users (
    id SERIAL,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fk_role_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (fk_role_id) REFERENCES Role(role_id),
    status status NOT NULL DEFAULT 'active'
    id SERIAL,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fk_role_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (fk_role_id) REFERENCES Role(role_id),
    status status NOT NULL DEFAULT 'active'
);
CREATE TABLE Admin () INHERITS (Users);
CREATE TABLE IF NOT EXISTS public.cycliste (
    -- Inherited from table public.users: id integer NOT NULL DEFAULT nextval('users_id_seq'::regclass),
    -- Inherited from table public.users: nom character varying(255) COLLATE pg_catalog."default" NOT NULL,
    -- Inherited from table public.users: prenom character varying(255) COLLATE pg_catalog."default" NOT NULL,
    -- Inherited from table public.users: email character varying(255) COLLATE pg_catalog."default" NOT NULL,
    -- Inherited from table public.users: password character varying(255) COLLATE pg_catalog."default" NOT NULL,
    -- Inherited from table public.users: fk_role_id integer NOT NULL,
    age integer NOT NULL,
    status status DEFAULT 'inactive'::status,
    image_profile character varying(255) COLLATE pg_catalog."default" NOT NULL,
    wallet integer NOT NULL DEFAULT 0,
    acheivements text COLLATE pg_catalog."default" NOT NULL,
    first_name character varying(100) COLLATE pg_catalog."default",
    last_name character varying(100) COLLATE pg_catalog."default",
    team character varying(255) COLLATE pg_catalog."default",
    nationality character varying(100) COLLATE pg_catalog."default",
    preferred_race_type character varying(100) COLLATE pg_catalog."default",
    height_cm integer,
    weight_kg integer
) INHERITS (public.users) 
CREATE TABLE IF NOT EXISTS public.cycliste (
    -- Inherited from table public.users: id integer NOT NULL DEFAULT nextval('users_id_seq'::regclass),
    -- Inherited from table public.users: nom character varying(255) COLLATE pg_catalog."default" NOT NULL,
    -- Inherited from table public.users: prenom character varying(255) COLLATE pg_catalog."default" NOT NULL,
    -- Inherited from table public.users: email character varying(255) COLLATE pg_catalog."default" NOT NULL,
    -- Inherited from table public.users: password character varying(255) COLLATE pg_catalog."default" NOT NULL,
    -- Inherited from table public.users: fk_role_id integer NOT NULL,
    age integer NOT NULL,
    status status DEFAULT 'inactive'::status,
    image_profile character varying(255) COLLATE pg_catalog."default" NOT NULL,
    wallet integer NOT NULL DEFAULT 0,
    acheivements text COLLATE pg_catalog."default" NOT NULL,
    first_name character varying(100) COLLATE pg_catalog."default",
    last_name character varying(100) COLLATE pg_catalog."default",
    team character varying(255) COLLATE pg_catalog."default",
    nationality character varying(100) COLLATE pg_catalog."default",
    preferred_race_type character varying(100) COLLATE pg_catalog."default",
    height_cm integer,
    weight_kg integer
) INHERITS (public.users) 

CREATE TABLE Fan (
    wallet INT NOT NULL DEFAULT 500,
    status status DEFAULT 'active',
    active_points INT NOT NULL DEFAULT 0
    wallet INT NOT NULL DEFAULT 500,
    status status DEFAULT 'active',
    active_points INT NOT NULL DEFAULT 0
) INHERITS (Users);
CREATE TABLE Course (
    course_id SERIAL,
    course_nom VARCHAR(255) NOT NULL,
    PRIMARY KEY (course_id)
    course_id SERIAL,
    course_nom VARCHAR(255) NOT NULL,
    PRIMARY KEY (course_id)
);
CREATE TABLE difficulte (
    difficulte_id SERIAL,
    difficulte_nom VARCHAR(255),
    PRIMARY KEY (difficulte_id)
    difficulte_id SERIAL,
    difficulte_nom VARCHAR(255),
    PRIMARY KEY (difficulte_id)
);
CREATE TABLE categorie (
    categorie_id SERIAL,
    categorie_nom VARCHAR(255),
    PRIMARY KEY (categorie_id)
    categorie_id SERIAL,
    categorie_nom VARCHAR(255),
    PRIMARY KEY (categorie_id)
);
CREATE TABLE Etape(
    etape_id SERIAL,
    description VARCHAR(255) NOT NULL,
    region VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    fk_difficulte_id INT NOT NULL,
    fk_course_id INT NOT NULL,
    fk_categorie_id INT NOT NULL,
    PRIMARY KEY (etape_id),
    FOREIGN KEY (fk_difficulte_id) REFERENCES difficulte(difficulte_id),
    FOREIGN KEY (fk_course_id) REFERENCES Course(course_id),
    FOREIGN KEY (fk_categorie_id) REFERENCES categorie(categorie_id)
    etape_id SERIAL,
    description VARCHAR(255) NOT NULL,
    region VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    fk_difficulte_id INT NOT NULL,
    fk_course_id INT NOT NULL,
    fk_categorie_id INT NOT NULL,
    PRIMARY KEY (etape_id),
    FOREIGN KEY (fk_difficulte_id) REFERENCES difficulte(difficulte_id),
    FOREIGN KEY (fk_course_id) REFERENCES Course(course_id),
    FOREIGN KEY (fk_categorie_id) REFERENCES categorie(categorie_id)
);
CREATE TABLE video (
    video_id SERIAL,
    video_url VARCHAR(255) NOT NULL,
    fk_etape_id INT NOT NULL,
    PRIMARY KEY (video_id)
    video_id SERIAL,
    video_url VARCHAR(255) NOT NULL,
    fk_etape_id INT NOT NULL,
    PRIMARY KEY (video_id)
);
CREATE TABLE historique (
    historique_id SERIAL,
    nom VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    fk_cycliste_id INT NOT NULL,
    PRIMARY KEY (historique_id),
    FOREIGN KEY (fk_cycliste_id) REFERENCES Users(id)
    historique_id SERIAL,
    nom VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    fk_cycliste_id INT NOT NULL,
    PRIMARY KEY (historique_id),
    FOREIGN KEY (fk_cycliste_id) REFERENCES Users(id)
);
CREATE TABLE Comment (
    comment_id SERIAL,
    status status DEFAULT 'inactive',
    comment_content TEXT NOT NULL,
    fk_user_id INT NOT NULL,
    fk_etape_id INT NOT NULL,
    PRIMARY KEY (comment_id),
    FOREIGN KEY (fk_user_id) REFERENCES Users(id),
    FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id)
    comment_id SERIAL,
    status status DEFAULT 'inactive',
    comment_content TEXT NOT NULL,
    fk_user_id INT NOT NULL,
    fk_etape_id INT NOT NULL,
    PRIMARY KEY (comment_id),
    FOREIGN KEY (fk_user_id) REFERENCES Users(id),
    FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id)
);
CREATE TABLE QA (
    question_id SERIAL,
    status status DEFAULT 'inactive',
    question_content TEXT NOT NULL,
    response_content TEXT NULL,
    fk_sender_id INT NOT NULL,
    fk_receiver_id INT NOT NULL,
    PRIMARY KEY (question_id),
    FOREIGN KEY (fk_sender_id) REFERENCES Users(id),
    FOREIGN KEY (fk_receiver_id) REFERENCES Users(id)
    question_id SERIAL,
    status status DEFAULT 'inactive',
    question_content TEXT NOT NULL,
    response_content TEXT NULL,
    fk_sender_id INT NOT NULL,
    fk_receiver_id INT NOT NULL,
    PRIMARY KEY (question_id),
    FOREIGN KEY (fk_sender_id) REFERENCES Users(id),
    FOREIGN KEY (fk_receiver_id) REFERENCES Users(id)
);
CREATE TABLE Favorite (
(Database Schema Finale design)
                          favorite_id SERIAL,
                          fk_user_id INT NOT NULL,
                          fk_cycliste_id INT NOT NULL,
                          PRIMARY KEY (favorite_id),
                          FOREIGN KEY (fk_user_id) REFERENCES Users(id),
                          FOREIGN KEY (fk_cycliste_id) REFERENCES Users(id)

);
CREATE TABLE ResultsPerEtape (
                                 id SERIAL,
                                 fk_cyliste_id INT NOT NULL,
                                 fk_etape_id INT NOT NULL,
                                 duree TIMESTAMP,
                                 PRIMARY KEY (id),
                                 FOREIGN KEY (fk_cyliste_id) REFERENCES Users(id),
                                 FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id)

    favorite_id SERIAL,
    fk_user_id INT NOT NULL,
    fk_cyclisme_id INT NOT NULL,
    PRIMARY KEY (favorite_id)

);

CREATE TABLE ResultsPerEtape (
    id SERIAL,
    fk_cyliste_id INT NOT NULL,
    fk_etape_id INT NOT NULL,
    duree TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (fk_cyliste_id) REFERENCES Users(id),
    FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id)
(remove unnecessary table)

);
CREATE TABLE ResultsPerEtape (
                                 id SERIAL,
                                 fk_cyliste_id INT NOT NULL,
                                 fk_etape_id INT NOT NULL,
                                 duree TIMESTAMP,
                                 PRIMARY KEY (id),
                                 FOREIGN KEY (fk_cyliste_id) REFERENCES Users(id),
                                 FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id)
 (Database Schema Finale design)
);
CREATE TABLE Likes (
    likes_id SERIAL,
    fk_etape_id INT NOT NULL,
    fk_user_id INT NOT NULL,
    PRIMARY KEY (likes_id),
    FOREIGN KEY (fk_user_id) REFERENCES Users(id),
    FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id)
    likes_id SERIAL,
    fk_etape_id INT NOT NULL,
    fk_user_id INT NOT NULL,
    PRIMARY KEY (likes_id),
    FOREIGN KEY (fk_user_id) REFERENCES Users(id),
    FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id)
);
CREATE TABLE Transaction (
    transaction_id SERIAL,
    fk_sender_id INT NOT NULL,
    fk_receiver_id INT NOT NULL,
    amount INT NOT NULL,
    date DATE,
    PRIMARY KEY (transaction_id),
    FOREIGN KEY (fk_sender_id) REFERENCES Users(id),
    FOREIGN KEY (fk_receiver_id) REFERENCES Users(id)
    transaction_id SERIAL,
    fk_sender_id INT NOT NULL,
    fk_receiver_id INT NOT NULL,
    amount INT NOT NULL,
    date DATE,
    PRIMARY KEY (transaction_id),
    FOREIGN KEY (fk_sender_id) REFERENCES Users(id),
    FOREIGN KEY (fk_receiver_id) REFERENCES Users(id)
);
CREATE TABLE photos (
    photo_id SERIAL,
    photo_path VARCHAR(255),
    fk_user_id INT NOT NULL,
    PRIMARY KEY (photo_id),
    FOREIGN KEY (fk_user_id) REFERENCES Users(id)
    photo_id SERIAL,
    photo_path VARCHAR(255),
    fk_user_id INT NOT NULL,
    PRIMARY KEY (photo_id),
    FOREIGN KEY (fk_user_id) REFERENCES Users(id)
);
CREATE TABLE signal (
    signale_id SERIAL,
    description TEXT NOT NULL,
    fk_etape_id INT NOT NULL,
    fk_user_id INT NOT NULL,
    PRIMARY KEY (signale_id),
    FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id),
    FOREIGN KEY (fk_user_id) REFERENCES Users(id)
    signale_id SERIAL,
    description TEXT NOT NULL,
    fk_etape_id INT NOT NULL,
    fk_user_id INT NOT NULL,
    PRIMARY KEY (signale_id),
    FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id),
    FOREIGN KEY (fk_user_id) REFERENCES Users(id)
);
CREATE TABLE Inscription (
    inscription_id SERIAL,
    fk_user_id INT NOT NULL,
    fk_etape_id INT NOT NULL,
    PRIMARY KEY (inscription_id),
    FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id),
    FOREIGN KEY (fk_user_id) REFERENCES Users(id)
    inscription_id SERIAL,
    fk_user_id INT NOT NULL,
    fk_etape_id INT NOT NULL,
    PRIMARY KEY (inscription_id),
    FOREIGN KEY (fk_etape_id) REFERENCES Etape(etape_id),
    FOREIGN KEY (fk_user_id) REFERENCES Users(id)
);
CREATE TABLE resetpassword (
    reset_id SERIAL,
    reset_email VARCHAR(255) NOT NULL,
    reset_token VARCHAR(255) NOT NULL,
    reset_status status DEFAULT 'active',
    PRIMARY KEY (reset_id)
    reset_id SERIAL,
    reset_email VARCHAR(255) NOT NULL,
    reset_token VARCHAR(255) NOT NULL,
    reset_status status DEFAULT 'active',
    PRIMARY KEY (reset_id)
);
CREATE TABLE visitlogs (
    log_id SERIAL NOT NULL,
    log_date timestamp,
    log_ip VARCHAR(255) NOT NULL,
    log_country varchar(255) NOT NULL,
    log_city varchar(255) NOT NULL,
    log_ip VARCHAR(255) NOT NULL,
    log_country varchar(255) NOT NULL,
    log_city varchar(255) NOT NULL,
    log_region varchar(255) NOT NULL
)
CREATE TABLE IF NOT EXISTS public.visitors
(
    id integer NOT NULL DEFAULT nextval('visitors_id_seq'::regclass),
    ip_address character varying(45) COLLATE pg_catalog."default" NOT NULL,
    country character varying(100) COLLATE pg_catalog."default",
    city character varying(100) COLLATE pg_catalog."default",
    visited_at timestamp without time zone NOT NULL,
    page_visited character varying(255) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT visitors_pkey PRIMARY KEY (id)
)