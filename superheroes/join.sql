SELECT t1.name, t3.name FROM naughty as t1 INNER JOIN heroe_naughty as t2 ON t1.id=t2.id_naughty INNER JOIN superheroe as t3 ON t3.id=t2.id_hero WHERE t1.name='joker';

SELECT * FROM superheroe as t1 INNER JOIN heroe_naughty as t2 ON t1.id = t2.id_hero INNER JOIN naughty as t3 ON t2.id_naughty = t3.id WHERE t1.name='batman';