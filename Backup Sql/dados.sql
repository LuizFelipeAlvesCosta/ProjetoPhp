PGDMP         +                y            cakephp    9.6.23    9.6.23     Y           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            Z           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            [           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            \           1262    16393    cakephp    DATABASE     �   CREATE DATABASE cakephp WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';
    DROP DATABASE cakephp;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            ]           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12387    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            ^           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16404    eventos    TABLE       CREATE TABLE public.eventos (
    id integer NOT NULL,
    id_evento integer,
    data_inicio character varying(12),
    data_fim character varying(12),
    descricao character varying(455),
    nome character varying(455),
    situacao character varying(255)
);
    DROP TABLE public.eventos;
       public         postgres    false    3            �            1259    16412    eventos2    TABLE     2  CREATE TABLE public.eventos2 (
    id integer NOT NULL,
    id_evento integer,
    data_inicio character varying(16),
    data_fim character varying(16),
    descricao character varying(300),
    nome character varying(455),
    situacao character varying(150),
    data_exclusao character varying(150)
);
    DROP TABLE public.eventos2;
       public         postgres    false    3            �            1259    16399 
   tipoevento    TABLE     �   CREATE TABLE public.tipoevento (
    id integer NOT NULL,
    tipo_evento character varying(255),
    cor character varying(20)
);
    DROP TABLE public.tipoevento;
       public         postgres    false    3            U          0    16404    eventos 
   TABLE DATA               b   COPY public.eventos (id, id_evento, data_inicio, data_fim, descricao, nome, situacao) FROM stdin;
    public       postgres    false    186   �       V          0    16412    eventos2 
   TABLE DATA               r   COPY public.eventos2 (id, id_evento, data_inicio, data_fim, descricao, nome, situacao, data_exclusao) FROM stdin;
    public       postgres    false    187   M       T          0    16399 
   tipoevento 
   TABLE DATA               :   COPY public.tipoevento (id, tipo_evento, cor) FROM stdin;
    public       postgres    false    185   �       �           2606    16419    eventos2 eventos2_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.eventos2
    ADD CONSTRAINT eventos2_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.eventos2 DROP CONSTRAINT eventos2_pkey;
       public         postgres    false    187    187            �           2606    16411    eventos eventos_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.eventos
    ADD CONSTRAINT eventos_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.eventos DROP CONSTRAINT eventos_pkey;
       public         postgres    false    186    186            �           2606    16403    tipoevento tipoevento_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.tipoevento
    ADD CONSTRAINT tipoevento_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.tipoevento DROP CONSTRAINT tipoevento_pkey;
       public         postgres    false    185    185            U   H   x�3�4�4202�5��54�3�8]��2�RR
���K8}J3�sҊRS�9R�RR�JR�b���� ��y      V   �   x�E�1�0 g��@i�N� ���.u��&.m��'R�n�;�q�1}c���!�X�Lz�d�=��k�>/~�Y`�8SL�MY��j�����PC^��r@0�ƨ=qIG,d�-.�����}�\^5ؚ�u��NJ�/�q3{      T   >   x�3��/.ILO�U��W����s9��-����P��3K�
8��RSS̹b���� �_�     