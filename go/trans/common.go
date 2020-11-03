package trans

import (
	"fmt"
	"math"
)

// 从 int 型转换为 int8
func Unit8FromInt(n int) (uint8, error)  {
	if 0 <= n && n <= math.MaxUint8 {
		return unit8(n), nil
	}
	return 0, fmt.Errorf("%d is out of the uint8 range", n)
}

// 从 float64 转换为 int
func IntFromFloat64(x float64) int {
	if math.MinInt32 <= x && x <= math.MaxInt32{
		whole, fraction := math.Modf(x)
		if fraction >= 0.5 {
			whole++
		}
		return int(whole)
	}
	panic(fmt.Sprintf("%g is out of the int32 range", x))
}






