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

