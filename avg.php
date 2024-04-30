function srednia_arytmetyczna($tablica) {
    // Sprawdzenie czy tablica nie jest pusta
    if (empty($tablica)) {
        return 0;
    }

    // Sumowanie wszystkich liczb w tablicy
    $suma = array_sum($tablica);

    // Obliczenie liczby elementów w tablicy
    $liczba_elementow = count($tablica);

    // Obliczenie średniej arytmetycznej
    $srednia = $suma / $liczba_elementow;

    return $srednia;
}

// Przykładowe użycie funkcji
$tablica = [5, 8, 12, 4, 9];
echo "Średnia arytmetyczna: " . srednia_arytmetyczna($tablica);

function srednia_wazona($tablica_liczb, $tablica_wag) {
    // Sprawdzenie czy tablice nie są puste
    if (empty($tablica_liczb) || empty($tablica_wag) || count($tablica_liczb) !== count($tablica_wag)) {
        return 0;
    }

    // Inicjalizacja sumy wag
    $suma_wag = 0;
    // Inicjalizacja sumy iloczynów wag i liczb
    $suma_iloczynow = 0;

    // Obliczenie sumy wag i sumy iloczynów wag i liczb
    for ($i = 0; $i < count($tablica_liczb); $i++) {
        $suma_wag += $tablica_wag[$i];
        $suma_iloczynow += $tablica_liczb[$i] * $tablica_wag[$i];
    }

    // Obliczenie średniej ważonej
    $srednia_wazona = $suma_iloczynow / $suma_wag;

    return $srednia_wazona;
}

// Przykładowe użycie funkcji
$tablica_liczb = [5, 8, 12, 4, 9];
$tablica_wag = [1, 2, 3, 4, 5];
echo "Średnia ważona: " . srednia_wazona($tablica_liczb, $tablica_wag);
