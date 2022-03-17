<x-app-tenant>
    @push('inline_css')

        <style>
            .display-none {
                display: none;
            }

        </style>

    @endpush
    <div class="container">

        {{--        Values header--}}
        <x-utilities.section-header title="Table and value" classes="mb-3"/>

        {{--        References values--}}
        <x-tenant.table-values.reference-values />

        {{--        Periodic retentions--}}
        <x-tenant.table-values.isr-periodic-retentions />

        {{--        Periodic Subsidies Table--}}
        <x-tenant.table-values.subsidies-tables />

        {{--        Taxes tables--}}
        <x-tenant.table-values.taxes-tables />

    </div>

    @push('inline_scripts')
        <script>

            // Function to collapse tables with effect and changeing arrow icon
            const arrowClick = (name) => {
                $("#collapse-" + name).slideToggle(function () {
                    let arrowButton = document.getElementById(`${name}-icon`)
                    if (arrowButton.classList.contains('fa-chevron-circle-down')) {
                        arrowButton.classList.remove('fa-chevron-circle-down')
                        arrowButton.classList.add('fa-chevron-circle-up')
                    } else {
                        arrowButton.classList.remove('fa-chevron-circle-up')
                        arrowButton.classList.add('fa-chevron-circle-down')
                    }
                });
            }

            // Alpine function to change between tabs in Retentions ISR Section
            function data() {
                return {
                    changeTab(button) {
                        let retentionsButton = document.getElementById(`${button}-button`);
                        let retentionTabs = document.querySelectorAll('.tab-retention')
                        let allRetentionTables = document.querySelectorAll('.retentions-table')
                        let retentionTable = document.getElementById(`${button}-table`)

                        // Change all active classes to the othew tabs and added only the clicked button, active class.
                        if (!retentionsButton.classList.contains('active')) {
                            retentionTabs.forEach(item => {
                                item.classList.remove('active', 'bg-primary', 'text-white')
                            })
                            allRetentionTables.forEach(item => {
                                item.classList.add('d-none')
                            })
                            retentionsButton.classList.add('active', 'bg-primary', 'text-white')
                            retentionTable.classList.remove('d-none')
                        }
                    }
                }
            }

            // Alpine function to change between tabs in Subsidies Section
            function subsidiesData() {
                return {
                    changeTab(button) {
                        let subsidiesButton = document.getElementById(`${button}-button`);
                        let subsidiesTabs = document.querySelectorAll('.tab-subsidies')
                        let allSubsidiesTables = document.querySelectorAll('.subsidies-table')
                        let subsidyTable = document.getElementById(`${button}-table`)

                        // Change all active classes to the othew tabs and added only the clicked button, active class.
                        if (!subsidiesButton.classList.contains('active')) {
                            subsidiesTabs.forEach(item => {
                                item.classList.remove('active', 'bg-primary', 'text-white')
                            })
                            allSubsidiesTables.forEach(item => {
                                item.classList.add('d-none')
                            })
                            subsidiesButton.classList.add('active', 'bg-primary', 'text-white')
                            subsidyTable.classList.remove('d-none')
                        }
                    }
                }
            }

        </script>
    @endpush

</x-app-tenant>
