

\c tourmaroc;


CREATE TABLE Users (
    id SERIAL,
    nom,
    prenom,
    email,
    password
);

CREATE TABLE Admin (

) INHERITS (Users);

CREATE TABLE Cycliste (
    wallet,
    acheivement_points
) INHERITS (Users);


CREATE TABLE Fan (
    wallet,
    active_points
) INHERITS (Users);


CREATE TABLE Course (
    course_id,
    course_nom
);

CREATE TABLE Etape(
    etape_id,
    description,
    difficulte_id
    course_id,
    categorie_id,
    region,
    image,
    start_date,
    video_id
);

CREATE TABLE historique ();

CREATE TABLE Comment (
    comment_id,
    comment_content,
    fk_user_id,
    fk_etape_id,
);

CREATE TABLE QA (
    question_id,
    question_content,
    response_content,
    fk_sender_id,
    fk_receiver_id,
);

CREATE TABLE Equipe (
    equipe_id,
    equipe_nom,
    fk_user_id,
); -- MANY TO MANY Cyliste

CREATE TABLE Equipe_cyliste(
    fk_equipe_id,
    fk_cycliste_id,
);

CREATE TABLE ResultsPerEtape (
    id,
    fk_cyliste_id,
    fk_etape_id,
    duree,
);

CREATE TABLE Likes (
    likes_id,
    fk_etape_id,
    fk_user_id,
);

CREATE TABLE Transaction (
    transaction_id,
    fk_sender_id,
    fk_receiver_id,
    amount,
    date,
);

CREATE TABLE signal (
    signale_id,
    description,
    fk_etape_id,
);

CREATE TABLE Inscription ();

CREATE TABLE resetpassword ();