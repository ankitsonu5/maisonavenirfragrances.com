<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
<script>
    const menuList = document.getElementById('menu-list');
    const dataUrl = menuList.getAttribute('data-url');
    console.log(dataUrl)
    const sortable = new Sortable(menuList, {
        animation: 150,
        onUpdate: function(event) {
            const newOrder = sortable.toArray();
            fetch(dataUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        order: newOrder
                    }),
                })
                .then(response => {
                    if (response.ok) {
                        var Toast = Swal.mixin({
                            toast: true,
                            type: "success",
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 5000
                        });
                             Toast.fire({
                            icon: 'success',
                            title: ' Order updated successfully'
                        })
                    } else {
                        var Toast = Swal.mixin({
                            toast: true,
                            type: "success",
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 5000
                        });
                        Toast.fire({
                            icon: 'error',
                            title: ' Failed to update menu order'
                        })
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        },
    });
</script>
