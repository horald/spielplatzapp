--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: tblfilter; Type: TABLE; Schema: public; Owner: root; Tablespace: 
--

CREATE TABLE tblfilter (
    fldindex bigint NOT NULL,
    fldfeld character(80),
    fldwert character(80),
    fldmaske character(80),
    fldname character(80)
);


ALTER TABLE public.tblfilter OWNER TO root;

--
-- Name: tblfunc; Type: TABLE; Schema: public; Owner: root; Tablespace: 
--

CREATE TABLE tblfunc (
    fldindex bigint NOT NULL,
    fldbez character(250),
    fldphp character(500),
    fldmenuid bigint,
    fldtyp character(10),
    fldtarget character(50),
    fldparam character(100),
    fldaktiv character(5),
    fldname character(200),
    fldtimestamp timestamp with time zone,
    fldid_version bigint,
    fldversion character(5)
);


ALTER TABLE public.tblfunc OWNER TO root;

--
-- Name: tblmarkers; Type: TABLE; Schema: public; Owner: root; Tablespace: 
--

CREATE TABLE tblmarkers (
    fldname character(250),
    fldaddress character(250),
    fldlat double precision,
    fldlng double precision,
    fldtype character(10),
    fldindex integer NOT NULL
);


ALTER TABLE public.tblmarkers OWNER TO root;

--
-- Name: tblmarkers_fldindex_seq; Type: SEQUENCE; Schema: public; Owner: root
--

CREATE SEQUENCE tblmarkers_fldindex_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblmarkers_fldindex_seq OWNER TO root;

--
-- Name: tblmarkers_fldindex_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: root
--

ALTER SEQUENCE tblmarkers_fldindex_seq OWNED BY tblmarkers.fldindex;


--
-- Name: tblspielgeraete; Type: TABLE; Schema: public; Owner: root; Tablespace: 
--

CREATE TABLE tblspielgeraete (
    fldindex bigint NOT NULL,
    fldbez character varying(250),
    fldid_spielplatz bigint
);


ALTER TABLE public.tblspielgeraete OWNER TO root;

--
-- Name: tbltranslate; Type: TABLE; Schema: public; Owner: root; Tablespace: 
--

CREATE TABLE tbltranslate (
    fldindex bigint NOT NULL,
    fldlang character varying(5),
    fldbez character varying(250),
    fldname character varying(200)
);


ALTER TABLE public.tbltranslate OWNER TO root;

--
-- Name: fldindex; Type: DEFAULT; Schema: public; Owner: root
--

ALTER TABLE ONLY tblmarkers ALTER COLUMN fldindex SET DEFAULT nextval('tblmarkers_fldindex_seq'::regclass);


--
-- Name: tblfilter_pkey; Type: CONSTRAINT; Schema: public; Owner: root; Tablespace: 
--

ALTER TABLE ONLY tblfilter
    ADD CONSTRAINT tblfilter_pkey PRIMARY KEY (fldindex);


--
-- Name: tblfunc_pkey; Type: CONSTRAINT; Schema: public; Owner: root; Tablespace: 
--

ALTER TABLE ONLY tblfunc
    ADD CONSTRAINT tblfunc_pkey PRIMARY KEY (fldindex);


--
-- Name: tblspielgeraete_pkey; Type: CONSTRAINT; Schema: public; Owner: root; Tablespace: 
--

ALTER TABLE ONLY tblspielgeraete
    ADD CONSTRAINT tblspielgeraete_pkey PRIMARY KEY (fldindex);


--
-- Name: tbltranslate_pkey; Type: CONSTRAINT; Schema: public; Owner: root; Tablespace: 
--

ALTER TABLE ONLY tbltranslate
    ADD CONSTRAINT tbltranslate_pkey PRIMARY KEY (fldindex);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

