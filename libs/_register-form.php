<!-- start register -->
<section class="register">
    <div class="main py-3">
        <!-- sign up -->
        <form method="POST" class="form" id="sign-up">
            <h3 class="heading">Sign up</h3>
            <p class="desc">Register to receive offers from us right now!</p>
            <div class="row" style="width: 800px;">
                <div class="col">
                    <div class="form-group">
                        <label for="fullname" class="form-label">Fullname (*)</label>
                        <input id="fullname" name="fullname" type="text" rules="required" placeholder="Enter your full name"
                            class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="username" class="form-label">Username (*)</label>
                        <input id="username" name="username" type="text" rules="required|min:3|max:10"
                            placeholder="Choose your username" class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password (*)</label>
                        <input id="password" name="password" type="password" rules="required|min:3"
                            placeholder="Enter password" class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm password (*)</label>
                        <input id="password_confirmation" name="password_confirmation"
                            rules="required|confirm:#password" placeholder="Re-enter password" type="password"
                            class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Phone (*)</label>
                        <input id="phone" name="phone" type="tel" rules="required|min:10|max:10"
                            placeholder="Enter phone number" class="form-control" maxlength="10">
                        <span class="form-message"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input id="avatar" name="avatar" type="file" class="form-radio-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email (*)</label>
                        <input id="email" name="email" type="email" rules="required|email"
                            placeholder="Enter registration email" class="form-control">
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="city" class="form-label">City (*)</label>
                        <select id="city" rules="required" name="city" class="form-control">
                            <option value="">-- Choose city --</option>
                            <option value="ha noi">Hanoi</option>
                            <option value="ho chi minh">Ho Chi Minh City</option>
                            <option value="thanh hoa">Thanh Hoa</option>
                            <option value="nghe an">Nghe An</option>
                            <option value="dong nai">Dong Nai</option>
                            <option value="binh duong">Binh Duong</option>
                            <option value="hai phong">Hai Phong</option>
                            <option value="an giang">An Giang</option>
                            <option value="hai duong">Hai Duong</option>
                            <option value="hue">Hue</option>
                        </select>
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Gender (*)</label>
                        <div class="form-radio-control">
                            <div>
                                <input name="gender" type="radio" rules="checkone:gender" value="male"
                                    class="form-radio">Male
                            </div>
                            <div>
                                <input name="gender" type="radio" rules="checkone:gender" value="female"
                                    class="form-radio">Female
                            </div>
                            <div>
                                <input name="gender" type="radio" rules="checkone:gender" value="other"
                                    class="form-radio">Other
                            </div>
                        </div>
                        <span class="form-message"></span>
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input id="address" name="address" type="text" placeholder="Enter your address"
                            class="form-control">
                        <span class="form-message"></span>
                    </div>
                </div>
            </div>

            <button class="form-submit" type="submit" name="register-submit">Sign up</button>
            <p class="desc">Already have an account? <a href="./login.html">Sign in</a></p>
        </form>

    </div>
</section>
<!-- !start register -->
