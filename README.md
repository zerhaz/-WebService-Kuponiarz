# -WebService-Kuponiarz


###POL###

Panel zarządzania do aplikacji mobilnej Kuponiarz. https://github.com/zerhaz/-Android-Kuponiarz

WAŻNE!
Aby panel działał prawidłowo wymagane jest dodanie danych dostępowych do bazy danych (bazę należy utworzyć).
Przykładowa baza danych znajduje się w pliku "database_example.sql". Dane logowania do panelu zarządzania w przesłanej bazie danych to "admin" "pass1".
Pliki, gdzie należy wstawić dane dostępowe do bazy to:
- /android/push_notification.php
- /android/register.php
- connect.php
Dodatkowo w "/android/push_notification.php" należy umieścić unikatowy kod autoryzacyjny z FCM (Firebase Cloud Messaging)
