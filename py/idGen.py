import random
from datetime import timedelta, date

def random_date(start_year=1900, end_year=2000):
    """Generate a random date between start_year and end_year."""
    start_date = date(start_year, 1, 1)
    end_date = date(end_year, 12, 31)
    delta_days = (end_date - start_date).days
    random_days = random.randint(0, delta_days)
    return start_date + timedelta(days=random_days)

def calculate_checksum(id_number):
    """Calculate the Luhn checksum digit for a 12-digit ID number."""
    sum_ = 0
    for i in range(len(id_number)):
        digit = int(id_number[i])
        if i % 2 == 0:
            sum_ += digit
        else:
            doubled = digit * 2
            sum_ += doubled // 10 + doubled % 10
    return (10 - sum_ % 10) % 10

def generate_random_id_number():
    """Generate a random South African ID number."""
    birth_date = random_date().strftime('%y%m%d')
    gender = str(random.randint(0000, 9999)).zfill(4)
    citizenship = random.choice(['0', '1'])  # 0 for citizen, 1 for resident
    race_digit = str(random.randint(0, 9))   # No longer relevant, but included for format completeness
    id_number = birth_date + gender + citizenship + race_digit
    checksum = calculate_checksum(id_number)
    return id_number + str(checksum)

# Generate 10 random ID numbers
random_id_numbers = [generate_random_id_number() for _ in range(1000)]
print (random_id_numbers)


