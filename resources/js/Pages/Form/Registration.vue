<template>
    <div>
        <Head>
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>Summer Registration</title>
        </Head>
            <section class="py-10 bg-[url('/images/background_login.png')]">
                <div class="max-w-7xl mx-auto ">
                    <p class="text-md md:text-xl font-bold text-center">2022 Art Summer Camp/Class Registration</p>
                    <div class="text-center">
                    <p class="text-red-500 text-sm">Note: Before Submit Please Download parent concern form</p>
                    <p class="text-sm">For Download <a href="/download/pdf1" class="text-blue-600 underline">(Parent Concern 1)</a>  <a href="/download/pdf2" class="text-blue-600 underline">(Parent Concern 2)</a></p>
                </div>
                    <form class="w-[780px] space-y-4 px-6 py-8 max-w-lg shadow-lg mx-auto rounded-lg" @submit.prevent="onSubmit">
                        <!-- Student Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700"> Student Name </label>
                            <div class="mt-1">
                                <input id="name" name="student_name" type="text" v-model="form.student_name"  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </div>
                            <span v-if="form.errors.student_name" class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.student_name }}</span>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <div class="col-span-2 md:col-span-1">
                                <div>
                                    <label for="age" class="block text-sm font-medium text-gray-700"> Age </label>
                                    <div class="mt-1">
                                        <input id="age" name="age" type="number" v-model="form.age"  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                    <span v-if="form.errors.age" class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.age }}</span>                                    
                                </div>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <div>
                                    <label for="grade" class="block text-sm font-medium text-gray-700"> Grade </label>
                                    <div class="mt-1">
                                         <select v-model="form.grade" name="" id="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="Nursery">Nursery</option>
                                            <option value="Pre-K">Pre-K</option>
                                            <option value="K">K</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <span v-if="form.errors.grade" class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.grade }}</span>                                    
                                </div>
                            </div>
                        </div>

                        <!-- Guardian -->
                        <div>
                            <label for="guardian_name" class="block text-sm font-medium text-gray-700"> Parent/Guardian Name </label>
                            <div class="mt-1">
                                <input id="guardian_name" name="guardian_name" type="text"   v-model="form.guardian_name" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </div>
                            <span v-if="form.errors.guardian_name"  class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.guardian_name }}</span>
                        </div>

                        <!-- home address -->
                        <div>
                            <label for="home_address" class="block text-sm font-medium text-gray-700"> Home Address </label>
                            <div class="mt-1">
                                <input id="home_address"  name="home_address" type="text"  v-model="form.home_address" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </div>
                            <span v-if="form.errors.home_address" class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.home_address }}</span>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <!-- work -->
                            <div class="col-span-2 md:col-span-1">
                                <div>
                                    <label for="work" class="block text-sm font-medium text-gray-700"> Work </label>
                                    <div class="mt-1">
                                        <input id="work"  name="work" type="text" v-model="form.work" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                    <span v-if="form.errors.work" class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.work }}</span>                                    
                                </div>
                            </div>
                            <!-- zip -->
                            <div class="col-span-2 md:col-span-1">
                                <div>
                                    <label for="zip" class="block text-sm font-medium text-gray-700"> Zip Code </label>
                                    <div class="mt-1">
                                        <input id="zip"  name="zip" type="text" v-model="form.zip" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                    <span v-if="form.errors.zip" class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.zip }}</span>                                    
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <!-- email -->
                            <div class="col-span-2 md:col-span-1">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
                                    <div class="mt-1">
                                        <input id="email"  name="email" type="email" v-model="form.email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                    <span v-if="form.errors.email" class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.email }}</span>                                    
                                </div>
                            </div>
                            <!-- emergency_contact -->
                            <div class="col-span-2 md:col-span-1">
                                <div>
                                    <label for="emergency_contact" class="block text-sm font-medium text-gray-700"> Emergency Contact (Name/Phone)  </label>
                                    <div class="mt-1">
                                        <input id="emergency_contact"  name="emergency_contact" type="tel" v-model="form.emergency_contact" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    </div>
                                    <span v-if="form.errors.emergency_contact" class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.emergency_contact }}</span>                                    
                                </div>
                            </div>
                        </div>

                        <!-- About child -->
                        <div>
                            <label for="home_address" class="block text-sm font-medium text-gray-700"> About your child</label>
                            <div class="mt-1">
                                <!-- <input id="home_address" name="home_address" type="text"  v-model="form.home_address" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" /> -->
                                <textarea name="about" v-model="form.about"  id="" class="w-full border-gray-300 rounded-md" rows="4"></textarea>
                            </div>
                            <span v-if="form.errors.about" class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.about }}</span>
                        </div>

                        <!-- Checkbox -->
                        <div class="flex justify-start">
                            <div>
                                <!-- <label for="" class="block text-sm font-medium text-gray-700"> Student Type </label> -->
                                <div class="">
                                    <div class="flex gap-1">
                                        <input type="checkbox" value="" id="flexCheckChecked" @click="typeOfStudent" :checked="form.new_student ? true : false" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-3 cursor-pointer" >
                                        <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                                            New Student - <span class="italic font-light text-md">All new students need to schedule a time for orientation</span>
                                        </label>
                                    </div>
                                </div>
                                <span v-if="form.errors.new_student" class="flex text-sm items-center justify-center p-2 text-red-700">{{ form.errors.new_student }}</span>                                
                            </div>
                        </div>

                        <!-- new student -->
                        <div v-if="form.new_student" class="font-semibold">
                            <p class="my-2">Camp Hours</p>
                            <!-- Camp Hour -->
                            <div class="flex flex-wrap gap-3">
                                <div class="flex gap-1">
                                    <input type="checkbox" value="" id="full_day" @click="campHourSelect('fullday')" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-3 cursor-pointer" >
                                    <label class="form-check-label inline-block text-gray-800" for="full_day">
                                        Full Day - (9AM - 4PM)
                                    </label>
                                </div>
                                <div class="flex gap-1">
                                    <input type="checkbox" value="" id="after_care" @click="campHourSelect('aftercare')" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-3 cursor-pointer" >
                                    <label class="form-check-label inline-block text-gray-800" for="after_care">
                                        After Care
                                    </label>
                                </div>
                                <div class="flex gap-1">
                                    <input type="checkbox" value="" id="half_day" @click="campHourSelect('halfday')" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-3 cursor-pointer" >
                                    <label class="form-check-label inline-block text-gray-800" for="half_day">
                                        Half Day - (9AM - 1PM)
                                    </label>
                                </div>
                                <div class="flex gap-1">
                                    <input type="checkbox" value="" id="evening" @click="campHourSelect('afternoon')" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-3 cursor-pointer" >
                                    <label class="form-check-label inline-block text-gray-800" for="evening">
                                        2PM - 6PM
                                    </label>
                                </div>
                            </div>

                            <p class="my-3">Weekly Class hours/days</p>

                            <!-- Weekly Hour -->
                            <div class="flex flex-wrap gap-3">
                                <div class="flex gap-1">
                                    <input type="checkbox" value="" id="tuesday" @click="weeklyHourSelect('tuesday')" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-3 cursor-pointer" >
                                    <label class="form-check-label inline-block text-gray-800" for="tuesday">
                                        Tues
                                    </label>
                                </div>
                                <div class="flex gap-1">
                                    <input type="checkbox" value="" id="wednesday" @click="weeklyHourSelect('wednesday')" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-3 cursor-pointer" >
                                    <label class="form-check-label inline-block text-gray-800" for="wednesday">
                                        Wed
                                    </label>
                                </div>
                                <div class="flex gap-1">
                                    <input type="checkbox" value="" id="thursday" @click="weeklyHourSelect('thursday')" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-3 cursor-pointer" >
                                    <label class="form-check-label inline-block text-gray-800" for="thursday">
                                        Thurs
                                    </label>
                                </div>
                                <div class="flex gap-1">
                                    <input type="checkbox" value="" id="two_to_four" @click="weeklyHourSelect('two_to_four')" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-3 cursor-pointer" >
                                    <label class="form-check-label inline-block text-gray-800" for="two_to_four">
                                        2-4pm
                                    </label>
                                </div>
                                <div class="flex gap-1">
                                    <input type="checkbox" value="" id="four_to_six" @click="weeklyHourSelect('four_to_six')" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-3 cursor-pointer" >
                                    <label class="form-check-label inline-block text-gray-800" for="four_to_six">
                                        4-6pm
                                    </label>
                                </div>
                            </div>
                        </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Apply</button>
                    </div>
                    </form>
                </div>
            </section>
    </div>
</template>

<script>
import { Head, Link, useForm } from '@inertiajs/vue3';
export default{
    name: 'program',
    setup() {
        const form = useForm({
            student_name: null,
            age: null,
            grade: null,
            guardian_name: null,
            home_address: null,
            work: null,
            zip: null,
            email: null,
            emergency_contact: null,
            about: null,
            new_student: false,
            camp_hour: {
                full_day: false,
                after_care: false,
                halfday: false,
                afternoon: false
            },
            weeklyHour: {
                tuesday: false,
                wednesday: false,
                thursday: false,
                two_to_four: false,
                four_to_six: false,
            }
        })
        const onSubmit = () => {
            // console.log(form)
            form.post(route('form.create'),{
                preserveScroll: true,
                onSuccess: () => {
                    form.reset('student_name')
                    form.reset('age')
                    form.reset('grade')
                    form.reset('guardian_name')
                    form.reset('home_address')
                    form.reset('work')
                    form.reset('zip')
                    form.reset('email')
                    form.reset('about')
                    form.reset('emergency_contact')
                    form.reset('new_student')
                    form.reset('camp_hour')
                    form.reset('weeklyHour')
                    // form.reset('email')
                },
            });
        }
        const typeOfStudent = (value) => {
            form.new_student = !form.new_student
        }
        const campHourSelect = (time) => {
            if(time === 'fullday'){
                form.camp_hour.full_day = !form.camp_hour.full_day
            }
            if(time === 'aftercare'){
                form.camp_hour.after_care = !form.camp_hour.after_care
            }
            if(time === 'halfday'){
                form.camp_hour.halfday = !form.camp_hour.halfday
            }
            if(time === 'afternoon'){
                form.camp_hour.afternoon = !form.camp_hour.afternoon
            }
            console.log(form.camp_hour);
        }
        const  weeklyHourSelect = (time) => {
            if(time === 'tuesday'){
                form.weeklyHour.tuesday = !form.weeklyHour.tuesday
            }
            if(time === 'wednesday'){
                form.weeklyHour.wednesday = !form.weeklyHour.wednesday
            }

            if(time === 'thursday'){
                form.weeklyHour.thursday = !form.weeklyHour.thursday
            }
            if(time === 'two_to_four'){
                form.weeklyHour.two_to_four = !form.weeklyHour.two_to_four
            }
            if(time === 'four_to_six'){
                form.weeklyHour.four_to_six = !form.weeklyHour.four_to_six
            }
            console.log(form.weeklyHour);
        }
        return {
            form,
            onSubmit,
            typeOfStudent,
            campHourSelect,
            weeklyHourSelect
        }
    }
}
</script>

<style scoped>

</style>