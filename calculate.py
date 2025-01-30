import sys
import math

def main():
    try:
        if len(sys.argv) < 4:
            print("<p>Error: Missing input values. <br>Please provide values for <strong>a, b, and c.</strong></p>")
            sys.exit(1)

        a = float(sys.argv[1])
        b = float(sys.argv[2])
        c = float(sys.argv[3])

        result = ""

        if a < 1:
            result += "<p>Input for <strong>a</strong> is too small.</p>"
        if b == 0:
            result += "<p>Input for <strong>b</strong> is 0 and will not affect the result.</p>"
        if c < 0:
            result += "<p>Error: Input for <strong>c/strong> is negative.</p>"
        else:
           
            cubed = c ** 3
            if cubed > 1000:
                final_result = math.sqrt(cubed) * 10
            else:
                final_result = math.sqrt(cubed) / a
            
            final_result += b
            result += f"<p>Final Result: {final_result:.2f}</p>"
        print(result)


    except Exception as e:
        print(f"<p>Error: {str(e)}</p>")

if __name__ == "__main__":
    main()