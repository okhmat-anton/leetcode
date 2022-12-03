
/**
 * @param {number[]} nums
 * @return {number[]}
 */
var countSmaller = function(nums) {
    const result = [];
    const sorted = [];

    function findIndex(sorted, number) {
        let start = 0;
        let end = sorted.length - 1;
        let mid = Math.floor((start + end) / 2);

        while (start <= end) {
            if (sorted[mid] < number) {
                start = mid + 1;
            } else {
                end = mid - 1;
            }
            mid = Math.floor((start + end) / 2);
        }

        return start;
    }

    for (let i = nums.length - 1; i >= 0; i--) {
        const index = findIndex(sorted, nums[i]);
        result.unshift(index);
        sorted.splice(index, 0, nums[i]);
    }
    return result;
};