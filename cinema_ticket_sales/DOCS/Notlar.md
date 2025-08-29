## 1. movies (Filmler)
id (Primary Key)
title (varchar 200) - Film adı
description (text) - Film açıklaması
duration (integer) - Süre (dakika)
genre (varchar 100) - Tür
rating (varchar 10) - Yaş sınırı (G, PG, PG-13, R)
director (varchar 100) - Yönetmen
cast (text) - Oyuncular
poster_image (varchar 255) - Poster görsel yolu
trailer_url (varchar 255) - Fragman URL
release_date (date) - Vizyon tarihi
is_active (boolean) - Aktif/pasif durumu
created_at (timestamp)
updated_at (timestamp)

## 2. halls (Salonlar)
id (Primary Key)
name (varchar 100) - Salon adı
capacity (integer) - Toplam kapasite
row_count (integer) - Sıra sayısı
seats_per_row (integer) - Sıra başına koltuk
hall_type (enum) - Salon tipi (standard, vip, imax)
screen_type (varchar 50) - Ekran tipi
sound_system (varchar 50) - Ses sistemi
is_active (boolean) - Aktif/pasif durumu
created_at (timestamp)
updated_at (timestamp)

## 3. showtimes (Gösterimler)
id (Primary Key)
movie_id (Foreign Key) - movies.id
hall_id (Foreign Key) - halls.id
show_date (date) - Gösterim tarihi
show_time (time) - Gösterim saati
base_price (decimal 8,2) - Temel bilet fiyatı
vip_price (decimal 8,2) - VIP bilet fiyatı
available_seats (integer) - Müsait koltuk sayısı
is_active (boolean) - Aktif/pasif durumu
created_at (timestamp)
updated_at (timestamp)