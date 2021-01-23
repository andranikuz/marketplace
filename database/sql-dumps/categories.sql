INSERT INTO "public"."categories" ("id", "title", "slug", "description", "parent_id", "sort", "created_at", "updated_at") VALUES
('1', 'Бытовая электроника', 'bytovaya_elektronika', NULL, '0', '1', NULL, NULL),
('2', 'Транспорт', 'transport', NULL, '0', '2', NULL, NULL),
('3', 'Автомобили', 'avtomobili', NULL, '2', '1', NULL, NULL),
('4', 'Мотоциклы', 'mototsikly', NULL, '2', '2', NULL, NULL),
('5', 'Грузовики', 'gruzoviki', NULL, '2', '3', NULL, NULL),
('6', 'Водный транспорт', 'vodnyy_transport', NULL, '2', '4', NULL, NULL),
('7', 'Audi', 'avtomobili_audi', NULL, '3', '1', NULL, NULL),
('8', 'BMW', 'avtomobili_bmw', NULL, '3', '2', NULL, NULL),
('9', 'Chery', 'avtomobili_chery', NULL, '3', '3', NULL, NULL),
('10', '80', 'avtomobili_audi_80', NULL, '7', '1', NULL, NULL),
('11', '100', 'avtomobili_audi_100', NULL, '7', '2', NULL, NULL),
('12', 'Недвижимость', 'nedvizhimost', NULL, '0', '3', NULL, NULL),
('16', 'Квартиры', 'kvartiry', NULL, '12', '3', NULL, NULL),
('17', 'Комнаты', 'komnaty', NULL, '12', '2', NULL, NULL),
('18', 'Дома', 'doma', NULL, '12', '1', NULL, NULL),
('19', 'Аудио и видео', 'audio_i_video', NULL, '1', '1', NULL, NULL),
('20', 'Игры, приставки и программы', 'igry_pristavki_i_programmy', NULL, '1', '2', NULL, NULL);