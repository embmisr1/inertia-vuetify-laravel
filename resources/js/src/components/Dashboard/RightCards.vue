<template>
    <div class="shadow-xl w-52 rounded rounded-b-md border-b border-blue-400">
        <div
            :class="`bg-blue-400 text-lg text-white rounded-b-lg font-bold text-center  uppercase`"
        >
            {{ title }}
        </div>
        <div class="p-2">
            <ul>
                <li>
                    <div class="flex justify-between font-semibold">
                        Total:
                        <span class="text-right font-bold">{{ total }}</span>
                    </div>
                </li>
                <div v-if="card_type == 'cat_1'">
                    <li>
                        <div class="flex justify-between font-semibold">
                            Valid:
                            <span class="text-right font-bold">{{
                                type_1.valid
                            }}</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between font-semibold">
                            Expired:
                            <span class="text-right font-bold">{{
                                type_1.expired
                            }}</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between font-semibold">
                            Undefined:
                            <span class="text-right font-bold">{{
                                type_1.undef
                            }}</span>
                        </div>
                    </li>
                </div>
                <div v-if="card_type == 'cat_2'">
                    <li>
                        <div class="flex justify-between font-semibold">
                            PD 1586:
                            <span class="text-right font-bold">{{
                                type_2.PD1586
                            }}</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between font-semibold">
                            RA 8749:
                            <span class="text-right font-bold">{{
                                type_2.RA8749
                            }}</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between font-semibold">
                            RA 9275:
                            <span class="text-right font-bold">{{
                                type_2.RA9275
                            }}</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between font-semibold">
                            RA 6969:
                            <span class="text-right font-bold">{{
                                type_2.RA6969
                            }}</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between font-semibold">
                            RA 9003:
                            <span class="text-right font-bold">{{
                                type_2.RA9003
                            }}</span>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        type_1: { type: Object },
        total: Number,
        // valid: Number,
        // expired: Number,
        // undef: Number,
        card_type: String,
        type_2: {
            type: Object,
        },
    },
};
</script>

<style></style>
