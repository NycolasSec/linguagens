import sys


def main():
    sys.stdout.write("Enter some text: ")
    x = sys.stdin.readline()

    sys.stdout.write(f"Standart Output: {x}")

    sys.stderr.write(f"Error Output\n {x}")


if __name__ == "__main__":
    main()
