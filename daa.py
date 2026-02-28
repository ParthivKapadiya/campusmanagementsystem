def merge_sort(arr):
    if len(arr) <= 1:
        return arr

    mid = len(arr) // 2
    left_half = arr[:mid]
    right_half = arr[mid:]

    left_half = merge_sort(left_half)
    right_half = merge_sort(right_half)

    return merge(left_half, right_half)

def merge(left, right):
    merged_list = []
    left_index = 0
    right_index = 0

    while left_index < len(left) and right_index < len(right):
        if left[left_index] < right[right_index]:
            merged_list.append(left[left_index])
            left_index += 1
        else:
            merged_list.append(right[right_index])
            right_index += 1

    while left_index < len(left):
        merged_list.append(left[left_index])
        left_index += 1

    while right_index < len(right):
        merged_list.append(right[right_index])
        right_index += 1

    return merged_list

numbers_to_sort = [38, 27, 43, 3, 9, 82, 10]
sorted_numbers_merge = merge_sort(numbers_to_sort)
print("Original array:", numbers_to_sort)
print("Sorted array (Merge Sort):", sorted_numbers_merge)